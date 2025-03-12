<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Pricing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MemberTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class LandingpagesController extends Controller
{
    public function index()
    {
        $pricingPlans = DB::table('pricingplans as p')
            ->crossJoin('features as f')
            ->selectRaw("
            p.id as plan_id,
            p.name as plan,
            CONCAT('Rp. ', FORMAT(p.price, 0, 'id_ID')) as price,
            f.name as feature_name,
            JSON_CONTAINS(p.features, JSON_QUOTE(CAST(f.id AS CHAR)), '$') as status_check
        ")
            ->orderBy('p.id')
            ->get()
            ->groupBy('plan_id');
        return view('landingpage', compact('pricingPlans'));
    }

    public function payment($pricingplans)
    {
        $breadcrumb = "Confirm Payment";
        $plan = Pricing::findOrFail($pricingplans);
        $paymentGateways = DB::table('payment_gateways')->get();
        return view('payment', compact('plan', 'breadcrumb', 'paymentGateways'));
    }

    public function confirmpay(Request $request)
    {
        $bill_no = date('YmdHis');
        $member = Members::where('user_id', auth()->user()->id)->first();
        $pricing_id = Pricing::where('id', $request->pricing_id)->first();
        $bill_date = date('Y-m-d H:i:s');
        $bill_exp = date('Y-m-d H:i:s', strtotime('+1 day'));
        $merchant_id = '50007';
        $user_id = 'bot' . $merchant_id;
        $passw  = 'vygHZ40f';

        $param = [
            "request" => "Pembelian Paket Gym Membership",
            "merchant_id" => $merchant_id,
            "merchant" => "Gym Payments Member",
            "bill_no" => $bill_no,
            "bill_date" => $bill_date,
            "bill_expired" => $bill_exp,
            "bill_desc" => "Payment GYM Andi ($bill_no)",
            "bill_currency" => "IDR",
            "bill_total" => $pricing_id->price * 100,
            "cust_no" => $member->id,
            "cust_name" => $member->name,
            "payment_channel" => $request->payment_method,
            "pay_type" => "1",
            "msisdn" => $member->phone,
            "email" => $member->email,
            "terminal" => "10",
            "shipping_address_country_code" => "ID",
            "signature" => sha1(md5(($user_id . $passw . $bill_no))),
        ];
        // Send request using cURL
        $ch = curl_init('https://debit-sandbox.faspay.co.id/cvr/300011/10');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json'
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $result = json_decode($response, true);

        // Check if response is successful
        if ($result['response_code'] !== "00") {
            dd($result);
            return response()->json(['message' => 'Transaction failed'], 400);
        } else {
            $data = [
                'member_id' => $member->id,
                'pricing_plan_id' => $pricing_id->id,
                'pg_code' => $request->payment_method,
                'trx_id' => $result['trx_id'],
                'bill_no' => $bill_no,
                'amount' => $pricing_id->price,
                'status' => 'pending',
                'bill_date' => $bill_date,
                'bill_expired' => $bill_exp,
            ];

            $membertransactions = (new MemberTransaction())->processStore($data);
        }
        return response()->json([
            'message' => 'Success create transactions',
            'trx_id' => $result['trx_id'],
        ], 200);
    }

    public function paymentform($id)
    {
        $merchant_id = '50007';
        $user_id = 'bot' . $merchant_id;
        $passw  = 'vygHZ40f';
        $breadcrumb = "Payment Transaction";
        $transaction = DB::table('members_transactions as mt')
            ->join('pricingplans as pp', 'mt.pricing_plan_id', '=', 'pp.id')
            ->join('payment_gateways as pm', 'mt.pg_code', '=', 'pm.pg_code')
            ->select(
                'mt.id',
                'mt.member_id',
                'mt.pricing_plan_id',
                'mt.bill_no',
                'mt.trx_id',
                'mt.amount',
                'mt.status',
                'mt.bill_date',
                'mt.bill_expired',
                'pp.name as pricing_name',
                'pp.price as pricing_price',
                'pm.pg_name as payment_method'
            )
            ->where('mt.trx_id', $id)
            ->first();

        $param = [
            "request" => "Payment Status Paket Gym Membership",
            "trx_id" => $transaction->trx_id,
            "merchant_id" => $merchant_id,
            "bill_no" => $transaction->bill_no,
            "signature" => sha1(md5(($user_id . $passw . $transaction->bill_no))),
        ];
        // Send request using cURL
        $ch = curl_init('https://debit-sandbox.faspay.co.id/cvr/100004/10');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: application/json'
        ]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $result = json_decode($response, true);

        if ($result['payment_status_code'] == 2) {
            $update_trx = MemberTransaction::where('trx_id', $id)->first();
            $update_trx->update([
                'paid_at' => date('Y-m-d H:i:s', strtotime($result['payment_date'])),
                'status' => "paid",
            ]);
            $member = Members::where('id', $transaction->member_id)->first();
            $member->update([
                'pricingplan_id' => $transaction->pricing_plan_id,
                'start_date' => date('Y-m-d H:i:s', strtotime($result['payment_date'])),
                'end_date' => $transaction->pricing_name == "Harian"
                    ? date('Y-m-d H:i:s', strtotime($result['payment_date'] . ' +1 day'))
                    : ($transaction->pricing_name == "Bulanan"
                        ? date('Y-m-d H:i:s', strtotime($result['payment_date'] . ' +1 month'))
                        : ($transaction->pricing_name == "Tahunan"
                            ? date('Y-m-d H:i:s', strtotime($result['payment_date'] . ' +1 year'))
                            : date('Y-m-d H:i:s', strtotime($result['payment_date']))))
            ]);

            // dd($member->pricingplan_id);
        }
        return view('paymentform', compact('breadcrumb', 'transaction'));
    }
}

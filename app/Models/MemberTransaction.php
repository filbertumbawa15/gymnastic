<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberTransaction extends Model
{
    use HasFactory;

    protected $table = 'members_transactions';

    protected $fillable = [
        'member_id',
        'pricingplan_id',
        'trx_id',
        'bill_no',
        'pg_code',
        'amount',
        'status',
        'bill_date',
        'bill_expired',
        'paid_at',
    ];

    public function processStore(array $data)
    {
        $memberTransactions = new MemberTransaction();
        $memberTransactions->member_id = $data['member_id'];
        $memberTransactions->pricing_plan_id = $data['pricing_plan_id'];
        $memberTransactions->pg_code = $data['pg_code'];
        $memberTransactions->trx_id = $data['trx_id'];
        $memberTransactions->bill_no = $data['bill_no'];
        $memberTransactions->amount = $data['amount'];
        $memberTransactions->status = $data['status'];
        $memberTransactions->bill_date = $data['bill_date'];
        $memberTransactions->bill_expired = $data['bill_expired'];

        if (!$memberTransactions->save()) {
            throw new \Exception('Error storing member transactions.');
        }
        return $memberTransactions;
    }
}

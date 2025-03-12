<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $breadcrumb = "Dashboard";
    public function index()
    {
        $breadcrumb = $this->breadcrumb;
        if (auth()->user()->role->rolename == "FINANCE") {
            return view('homefinance', compact('breadcrumb'));
        } else if (auth()->user()->role->rolename == "MEMBER") {
            $membership = Members::where('user_id', auth()->user()->id)->first();
            $alert = null;
            if ($membership->pricingplan_id != null) {
                // Calculate the remaining days
                $today = Carbon::now();
                $expiryDate = Carbon::parse($membership->end_date);
                $daysLeft = $today->diffInDays($expiryDate, false);

                // Determine the alert type based on the remaining days
                if ($daysLeft <= 15 && $daysLeft > 0) {
                    $alert = [
                        'type' => 'warning',
                        'message' => "Your membership will expire in {$daysLeft} days. Please renew soon.",
                        'button_text' => 'Renew Now',
                    ];
                } elseif ($daysLeft <= 0) {
                    $alert = [
                        'type' => 'danger',
                        'message' => "Your membership has expired. Please renew to regain access.",
                        'button_text' => 'Renew Now',
                    ];
                } elseif ($daysLeft > 15) {
                    $alert = [
                        'type' => 'success',
                        'message' => "Your membership is still active. You have {$daysLeft} days left.",
                    ];
                }
            } else {
                // No membership found
                $alert = [
                    'type' => 'info',
                    'message' => "You do not have an active membership. Please subscribe to a plan to access the benefits.",
                    'button_text' => 'Subscribe Now',
                ];
            }
            return view('homemember', compact('breadcrumb', 'alert'));
        } else {
            $memberdays = Members::where('pricingplan_id', 1)->get();
            $membermonths = Members::where('pricingplan_id', 2)->get();
            $memberyears = Members::where('pricingplan_id', 3)->get();
            return view('home', compact('breadcrumb','memberdays', 'membermonths', 'memberyears'));
        }
    }
}

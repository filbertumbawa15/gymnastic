<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $breadcrumb = "Dashboard";
    public function index()
    {
        $breadcrumb = $this->breadcrumb;
        if (auth()->user()->role->rolename == "FINANCE") {
            return view('homefinance', compact('breadcrumb'));
        } else {
            return view('home', compact('breadcrumb'));
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentGateways = [
            ["pg_code" => "707", "pg_name" => "ALFAGROUP"],
            ["pg_code" => "702", "pg_name" => "BCA Virtual Account"],
            ["pg_code" => "801", "pg_name" => "BNI Virtual Account"],
            ["pg_code" => "401", "pg_name" => "BRI E-PAY"],
            ["pg_code" => "400", "pg_name" => "BRI MOBILE BANKING"],
            ["pg_code" => "800", "pg_name" => "BRI Virtual Account"],
            ["pg_code" => "700", "pg_name" => "CIMB Clicks"],
            ["pg_code" => "701", "pg_name" => "DANAMON ONLINE BANKING"],
            ["pg_code" => "708", "pg_name" => "Danamon VA"],
            ["pg_code" => "802", "pg_name" => "Mandiri Virtual Account"],
            ["pg_code" => "408", "pg_name" => "Maybank Virtual Account"],
            ["pg_code" => "706", "pg_name" => "Payment Point Indomaret"],
            ["pg_code" => "402", "pg_name" => "Permata"]
        ];

        DB::table('payment_gateways')->insert($paymentGateways);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members_transactions', function (Blueprint $table) {
            $table->string('pg_code')->after('pricing_plan_id'); // Adding pg_code
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members_transactions', function (Blueprint $table) {
            $table->dropColumn('pg_code');
        });
    }
};

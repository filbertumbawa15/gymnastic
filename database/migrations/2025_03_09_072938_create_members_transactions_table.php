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
        Schema::create('members_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('pricing_plan_id');
            $table->string('trx_id')->nullable()->unique();
            $table->string('bill_no')->nullable()->unique();
            $table->decimal('amount', 10, 0);
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');
            $table->timestamp('bill_date')->nullable();
            $table->timestamp('bill_expired')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_transactions');
    }
};

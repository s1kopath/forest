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
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('amount');
            $table->double('charge');
            $table->double('net_amount');
            $table->string('payment_method');
            $table->integer('account_id');
            $table->tinyInteger('status')->default(0);
            $table->dateTime('date_time')->default(now());
            $table->boolean('is_approved')->default(false);
            $table->integer('approved_by')->nullable();
            $table->dateTime('approved_on')->nullable();
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
        Schema::dropIfExists('withdraws');
    }
};

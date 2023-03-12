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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('amount', 8, 2)->default(0);
            $table->string('type')->nullable();
            $table->string('purpose')->nullable();
            $table->string('reference_number')->nullable();
            $table->double('transaction_fee', 8, 2)->default(0);
            $table->double('net_amount', 8, 2)->default(0);
            $table->string('wallet_address')->nullable();
            $table->string('transaction_hash')->nullable();
            $table->string('card_number')->nullable();
            $table->string('network')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->double('stake_amount', 8, 2)->nullable();
            $table->integer('stake_duration')->nullable();
            $table->integer('from_user_id')->nullable();
            $table->integer('royalty_gen')->nullable();
            $table->integer('royalty_level')->nullable();
            $table->string('reward_title')->nullable();
            $table->string('contest_title')->nullable();
            $table->smallInteger('status')->default(1);
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
        Schema::dropIfExists('transactions');
    }
};

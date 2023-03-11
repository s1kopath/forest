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
        Schema::create('staking_rebate_bonuses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('bonus_from');
            $table->integer('user_stake_id');
            $table->double('amount', 8, 2);
            $table->date('date');
            $table->integer('generation');
            $table->integer('level');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('staking_rebate_bonuses');
    }
};

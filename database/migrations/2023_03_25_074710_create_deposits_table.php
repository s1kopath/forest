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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('currency');
            $table->double('amount', 8, 2);
            $table->string('coin_type');
            $table->string('network_type');
            $table->tinyInteger('status')->default(0);
            $table->dateTime('date_time')->default(now());
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
        Schema::dropIfExists('deposits');
    }
};

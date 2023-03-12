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
        Schema::create('user_stakes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('staking_rois_id');
            $table->double('amount', 8, 2);
            $table->float('percentage');
            $table->integer('duration');
            $table->double('amount_per_month', 8, 2);
            $table->integer('completed')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('next_payout')->nullable();
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
        Schema::dropIfExists('user_stakes');
    }
};

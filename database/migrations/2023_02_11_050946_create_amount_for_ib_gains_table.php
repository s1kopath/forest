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
        Schema::create('amount_for_ib_gains', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('self_amount')->default(0);
            $table->double('direct_amount')->default(0);
            $table->double('team_amount')->default(0);
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
        Schema::dropIfExists('amount_for_ib_gains');
    }
};

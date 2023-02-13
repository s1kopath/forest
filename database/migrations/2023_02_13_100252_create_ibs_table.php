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
        Schema::create('ibs', function (Blueprint $table) {
            $table->id();
            $table->string('ib_name');
            $table->double('self_amount');
            $table->double('direct_amount');
            $table->double('team_amount');
            $table->string('reward');
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
        Schema::dropIfExists('ibs');
    }
};

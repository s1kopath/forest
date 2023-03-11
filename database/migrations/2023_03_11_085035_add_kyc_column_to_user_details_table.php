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
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('kyc_type')->nullable();
            $table->longText('kyc_image_1')->nullable();
            $table->longText('kyc_image_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn('kyc_type');
            $table->dropColumn('kyc_image_1');
            $table->dropColumn('kyc_image_2');
        });
    }
};

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
        Schema::create('family_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('household_id');
            $table->string('family_status');
            $table->string('type_of_feeding');
            $table->string('toilet_type');
            $table->string('water_source');
            $table->string('food_prod_activity');
            $table->string('household_using_iodized');
            $table->string('household_using_ifr');     
            $table->timestamps();
            $table->foreign('household_id')->references('id')->on('households')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_profiles');
    }
};

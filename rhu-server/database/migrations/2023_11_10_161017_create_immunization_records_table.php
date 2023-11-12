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
        Schema::create('immunization_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('date_of_vaccination');
            $table->string('vaccine_name');
            $table->string('vaccine_manufacturer')->nullable();
            $table->string('vaccination_site')->nullable();
            $table->date('next_vaccination_date')->nullable();
            $table->text('vaccination_notes')->nullable();
           
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('resident_profiles')->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immunization_records');
    }
};

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
        Schema::create('prenatal_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('date_of_visit');
            $table->string('doctor_name');
            $table->integer('gestational_age');
            $table->decimal('weight_gain', 5, 2);
            $table->decimal('current_weight', 5, 2);
            $table->string('blood_pressure', 20);
            $table->text('ultrasound_results')->nullable();
            $table->text('laboratory_tests')->nullable();
            $table->text('medications')->nullable();
            $table->text('complications')->nullable();
            $table->date('next_appointment_date');
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
        Schema::dropIfExists('prenatal_records');
    }
};

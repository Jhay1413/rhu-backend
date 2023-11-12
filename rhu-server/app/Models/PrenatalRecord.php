<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrenatalRecord extends Model
{
    protected $fillable = [
        'patient_id',
        'date_of_visit',	
        'doctor_name',	
        'gestational_age',	
        'weight_gain',	
        'current_weight',	
        'blood_pressure',	
        'ultrasound_results',	
        'laboratory_tests',	
        'medications',	
        'complications',	
        'next_appointment_date',
        'appointment_type'	

    ];
    public function resident () {
        return $this->belongsTo(ResidentProfile::class,'patient_id','id');
    }
}

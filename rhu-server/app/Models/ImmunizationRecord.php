<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmunizationRecord extends Model
{
    protected $fillable = [
        'patient_id',
        'date_of_vaccination',
        'vaccine_name',
        'vaccine_manufacturer',
        'vaccination_site',
        'next_vaccination_date',
        'vaccination_notes',
        'appointment_type'
    ];
    public function resident () {
        return $this->belongsTo(ResidentProfile::class,'patient_id','id');
    }
}

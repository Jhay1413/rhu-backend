<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentProfile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'age_in_months',
        'address',
        'contact_number',
        'email',
        'occupation',
        'sex',
        'household_type',
        'household_id'
    ];
   public function household (){
    return $this->belongsTo(Household::class,'household_id','id');
   }
   public function prenatal(){
    return $this->hasMany(PrenatalRecord::class);
   }
   public function immunization(){
    return $this->hasMany(ImmunizationRecord::class);
   }
}

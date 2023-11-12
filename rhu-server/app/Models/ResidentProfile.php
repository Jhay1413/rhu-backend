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
        'address',
        'contact_number',
        'email',
        'occupation',
        'sex',
        'household_type',
        'household_id'
    ];
   public function household (){
    return $this->belongsTo(Household::class);
   }
   public function prenatal(){
    return $this->hasMany(PrenatalRecord::class);
   }
   public function immunization(){
    return $this->hasMany(ImmunizationRecord::class);
   }
}

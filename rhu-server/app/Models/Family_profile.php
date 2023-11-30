<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family_profile extends Model
{
    protected $fillable = [
        'household_id',
        'family_status',
        'type_of_feeding',
        'toilet_type',
        'water_source',
        'food_prod_activity',
        'household_using_iodized',
        'household_using_ifr'
        // Add other attributes you want to be mass assignable
        // 'address', 'phone_number', etc.
    ];
   public function household (){
    return $this->belongsTo(Household::class,'household_id','id');
   }
}

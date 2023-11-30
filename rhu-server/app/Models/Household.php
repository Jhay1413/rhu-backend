<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = [
        'name',
        'address',
        'income',
        'contact_number'
        // Add other attributes you want to be mass assignable
        // 'address', 'phone_number', etc.
    ];
    public function resident () {
       
        return $this->hasMany(ResidentProfile::class);
    }
    public function family_profile(){
        return $this->hasOne(Family_profile::class);
        
    }
}

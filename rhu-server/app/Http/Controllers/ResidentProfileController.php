<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResidentProfile;

class ResidentProfileController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'address'=>'required',
            'contact_number' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'sex'=>'required',
            'household_type'=>'required',
            'household_id'=>'required',

            
        ]);

        $resident = ResidentProfile::create($validatedData);

        return response()->json([
            'success' => 'resident data created successfully!',
            'data' => $resident
        ]);
    }
    public function getResidents(){
        $residents = ResidentProfile::all();
        return response()->json($residents);
    }
}

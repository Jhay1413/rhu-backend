<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Household;

class HouseholdController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'income' => 'required',
            'contact_number'=>'required'
        ]);
    

        $household = Household::create($validatedData);

        return response()->json([
            'success' => 'Household data created successfully!',
            'data' => $household
        ]);
    }
    public function getHousehold(){
        $households = Household::all();
        return response()->json($households);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrenatalRecord;
use App\Models\ImmunizationRecord;
class AppointmentController extends Controller
{
    public function store_prenatal_record (Request $request){
       
            $prenatal_validated_data = $request->validate([
                'patient_id'                => 'required',
                'date_of_visit'             => 'required',	
                'doctor_name'               => 'required',		
                'gestational_age'           => 'required',		
                'weight_gain'               => 'required',	
                'current_weight'            => 'required',		
                'blood_pressure'            => 'required',		
                'ultrasound_results'        => 'required',		
                'laboratory_tests'          => 'required',	
                'medications'               => 'required',	
                'complications'             => 'required',		
                'next_appointment_date'     => 'required',	
                'appointment_type'	        => 'required',
            ]);
    
            $prenatal_data = PrenatalRecord::create($prenatal_validated_data);
            return response()->json([
                'success' => 'data created successfully!',
                'data' => $prenatal_data
            ]);
        
    }
    public function store_immunization_record (Request $request){

        $immunization_validated_data = $request->validate([
            'patient_id'                => 'required',
            'date_of_vaccination'    => 'required',
            'vaccine_name'           => 'required',
            'vaccine_manufacturer'   => 'required',
            'vaccination_site'       => 'required',
            'next_vaccination_date'  => 'required',
            'vaccination_notes'      => 'required',
            'appointment_type'       => 'required',
        ]);
        $immunization_data = ImmunizationRecord::create($immunization_validated_data);

        return response()->json([
            'success' => 'data created successfully!',
            'data' => $immunization_data
        ]);
    }
    public function get_all_prenatal_record (Request $request){
     
        $childData = PrenatalRecord::with('resident')->get();

        return response()->json([
            
            'data' => $childData
        ]);

    }
    public function get_all_immunization_record (Request $request){
     
        $childData = ImmunizationRecord::with('resident')->get();

        return response()->json([
            
            'data' => $childData
        ]);

    }


}


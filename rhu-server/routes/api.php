<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseholdController;
use App\Http\Controllers\ResidentProfileController;
use App\Http\Controllers\AppointmentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/addHousehold', [HouseholdController::class, 'store']);
Route::get('/getHouseholds', [HouseholdController::class, 'getHousehold']);

Route::post('/addResident', [ResidentProfileController::class, 'store']);
Route::get('/getResidents', [ResidentProfileController::class, 'getResidents']);

Route::post('/addNewPrenatal',[AppointmentController::class, 'store_prenatal_record']);
Route::post('/addNewImmunization',[AppointmentController::class,'store_immunization_record']);

Route::get('/getPrenatalRecord',[AppointmentController::class,'get_all_prenatal_record']);
Route::get('/getImmunizationRecord',[AppointmentController::class,'get_all_immunization_record']);

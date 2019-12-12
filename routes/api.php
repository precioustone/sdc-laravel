<?php

use Illuminate\Http\Request;

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

Route::get('/', function(){
  return response()->json(['status' => 200, 'message' => 'succcesful',]);
});  //generate token

/*
| Auth routes
*/
Route::post('register', 'AuthController@register');  //generate token
Route::post('login', 'AuthController@login');  //generate token
Route::post('logout', 'AuthController@logout'); // logout will make the token to blacklisted you have to create token again from login route
Route::post('refresh', 'AuthController@refresh'); //can refresh token with existing token
Route::post('secret/test', 'AuthController@test');

/*
| Patients routes
*/

Route::post('patients/add', 'Patientcontroller@create');
Route::get('patients', 'Patientcontroller@index');
Route::get('patient/{id}', 'Patientcontroller@byId');
Route::post('patient/edit/{id}', 'Patientcontroller@update');
Route::post('patient/del/{id}', 'Patientcontroller@delete');
Route::post('upload/avatar', 'Patientcontroller@imageUpload');


//On Unauthorized Login
Route::get('error', function(){
  return response()->json(['error' => 'Invalid Token']);
})->name('login');

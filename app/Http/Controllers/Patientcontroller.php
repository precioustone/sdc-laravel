<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class Patientcontroller extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cors');
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try{
            $patients = Patient::all();

            return response()->json(['patients' => json_encode($patients)]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()], 500);
        }
        
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return [type]
     * 
     */
    public function create(Request $request)
    {
        $newPatient = $request->except(['id','firstName','lastName','tbUpdated']);

        try{
            $patient = Patient::create($newPatient);
            return response()->json(['result'=>true, 'id' => $patient->id]);
            //return response()->json(json_encode($newPatient));
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param string    $id
     * @return \Illuminate\Http\JsonResponse
     * 
     */
    public function update(Request $request, $id)
    {
        $patient = $request->except(['id','firstName','lastName','tbUpdated']);

        try{
            Patient::where('id',$id)->update($patient);
            return response()->json(['result'=>true]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request  $request
     * @param string    $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function byId(Request $request, $id)
    {
        
        $patient = Patient::where('id',$id)->first();

        return response()->json(['patient' => json_encode($patient)]);
    }

    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request  $request
     * @param string    $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $id = $request->input('id');
        try{
            $res = Patient::destroy((int)$id);

            return response()->json(['result' => true,'res' => $res]);

        }catch(Exception $e)
        {
            return response()->json(['patient' => $e->getMessage()]);

        }
    }

    /**
     * Upload Image
     * @param \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function imageUpload(Request $request) {
        try{
            $path = $request->file('avatar')->store('avatars');
            return response()->json(['avatar' => $path]);
        }catch(Exception $e){
            return response()->json(['error' => 'File upload unsuccessful']);
        }
        
    }
}

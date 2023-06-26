<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor_change_password(Request $request)
    {
        return view('doctor.doctor-change-password');
    }
    public function my_patients(Request $request)
    {
        return view('doctor.doctor-my-patients');
    }
    public function doctor_profile_settings(Request $request)
    {
        return view('doctor.doctor-profile-settings');
    }
    
    public function create(Request $request)
    {
        // $data=$request->all();
        // echo "<pre>";
        // print_r($data);
        // "</pre>";
        
    }
}

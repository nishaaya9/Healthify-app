<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Booking;
use App\Models\Patient;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function search_doctor()
    {
        $doctors = Doctor::all();
        return view('search-doctor',['doctors' => $doctors]);
    }
    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        // $data=$request->all();
        // echo "<pre>";
        // print_r($data);
        // "</pre>";
        $role_id = $request->role_id;
        if ($role_id == 1) {
            $doctor = new Doctor();
            $doctor->role_id = $role_id;
            $doctor->d_name = $request->name;
            $doctor->d_email = $request->email;
            $doctor->d_password = $request->password;
            $doctor->save();
            return redirect('/login');
        } else {
            $patient = new Patient;
            $patient->role_id = $role_id;
            $patient->p_name=$request->name;
            $patient->p_email=$request->email;
            $patient->p_password=$request->password;
            $patient->save();
            return redirect('/login');
        }
    }
    public function login()
    {
        return view('login');
    }
    public function login_post(Request $request)
    {
        // $data=$request->all();
        // echo "<pre>";
        // print_r($data);
        // "</pre>";
        $doctor = Doctor::where(['d_email' => $request->email, 'd_password' => $request->password,])->first();
        $patient = Patient::where(['p_email' => $request->email, 'p_password' => $request->password,])->first();

        if (empty($doctor) && empty($patient)) {
            return view('login');
        } elseif ($patient) {
            $request->session()->put([
                'p_id' => $patient->p_id,
                'p_email' => $patient->p_email, 
                'p_password' => $patient->p_password,
                'p_name' => $patient->p_name,
                'p_lname' => $patient->p_lname,
                'p_mobile_number' => $patient->p_mobile_number,
                'p_gender' => $patient->p_gender,
                'p_dob' => $patient->p_dob,
                'p_city' => $patient->p_city,
                'p_state' => $patient->p_state,
                'p_country' => $patient->p_country,
                'p_profile_image' => $patient->p_profile_image
            ]);
            return redirect('/patient-dashboard');
        } elseif ($doctor->role_id == 1) {
            $request->session()->put([
                'd_id' => $doctor->d_id,
                'd_email' => $doctor->d_email,
                'd_password' => $doctor->d_password,
                'd_name' => $doctor->d_name,
                'd_lname' => $doctor->d_lname,
                'd_mobile_number' => $doctor->d_mobile_number,
                'd_gender' => $doctor->d_gender,
                'd_dob' => $doctor->d_dob,
                'degree' => $doctor->degree,
                'clinic_or_Hospital_name' => $doctor->clinic_or_Hospital_name,
                'clinic_or_Hospital_address' => $doctor->clinic_or_Hospital_address,
                'fees' => $doctor->fees,
                'specialization' => $doctor->specialization,
                'select_day_from' => $doctor->select_day_from,
                'select_day_to' => $doctor->select_day_to,
                'time_from' => $doctor->time_from,
                'time_to' => $doctor->time_to,
                'd_profile_image' => $doctor->d_profile_image
            ]);
            return redirect('/doctor-dashboard');
        }
    }
    public function doctor(Request $request)
    {
        $data = Booking::join('doctors', 'bookings.d_id', '=', 'doctors.d_id')
        ->join('patients', 'bookings.p_id', '=', 'patients.p_id')
        ->get(['patients.p_name', 'patients.p_lname', 'patients.p_mobile_number','patients.p_email', 'patients.p_address', 'bookings.p_id', 'bookings.d_id', 'bookings.appointment_date', 'bookings.appointment_time', 'bookings.created_at']);
        return view('doctor.doctor-dashboard', ['booking' => $data]);
    }
    public function patient(Request $request)
    {
        $data = Booking::join('doctors', 'bookings.d_id', '=', 'doctors.d_id')
        ->join('patients', 'bookings.p_id', '=', 'patients.p_id')
        ->get(['doctors.d_name', 'doctors.d_lname', 'doctors.specialization', 'doctors.fees', 'bookings.p_id','bookings.appointment_date', 'bookings.appointment_time', 'bookings.created_at']);
        return view('patient.patient-dashboard', ['booking' => $data]);
    }
    public function doctor_profile(Request $request)
    {
        return view('doctor-profile');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}

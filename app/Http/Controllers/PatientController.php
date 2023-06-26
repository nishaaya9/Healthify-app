<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function create(Request $request)
    {
        // $data=$request->all();
        // echo "<pre>";
        // print_r($data);
        // "</pre>";
    }

    public function profile_settings()
    {
        return view('patient.patient-profile-settings');
    }
    public function patient_change_password()
    {
        return view('patient.patient-change-password');
    }
    public function booking(string $id)
    {
        $doctor = Doctor::find($id);
        return view('booking', ['doctor' => $doctor]);
    }
    public function book(Request $request)
    {
        // $data=$request->all();
        // echo "<pre>";
        // print_r($data);
        // "</pre>";
        $book = new Booking;
        $book->d_id=$request->d_id;
        $book->p_id = $request->p_id;
        $book->appointment_date=$request->appointment_date;
        $book->appointment_time = $request->appointment_time;
        $book->save();
        return redirect('/booking-success');
    }
    public function booking_success()
    {
        return view('booking-success');
    }
}

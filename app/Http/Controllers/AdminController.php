<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Booking;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $data = Booking::join('doctors', 'bookings.d_id', '=', 'doctors.d_id')
            ->join('patients', 'bookings.p_id', '=', 'patients.p_id')
            ->get(['doctors.d_name', 'doctors.d_lname', 'doctors.specialization', 'doctors.fees', 'patients.p_name','bookings.appointment_date', 'bookings.appointment_time']);
        return view('admin.admin-appointment', ['booking' => $data]);
    }
    public function admin_register(Request $request)
    {
        return view('admin.admin-register');
    }
    public function admin_create(Request $request)
    {
        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/admin-login');
    }
    public function admin_login(Request $request)
    {
        return view('admin.admin-login');
    }
    public function login_check(Request $request)
    {
        $data = Admin::where(['email' => $request->email, 'password' => $request->password]);
        if ($data && !empty($data)) {
            //$request->session()->put(['email' => $data->email, 'password' => $data->password,'name' => $data->name]);
            return redirect('/admin-dashboard');
        } else {
            return view('admin.admin-login');
        }
    }
    public function admin_dashboard(Request $request)
    {
        return view('admin.admin-dashboard');
    }
    public function add_specialities(Request $request)
    {
        return view('admin.admin-add-specialities');
    }
    public function view_specialities(Request $request)
    {
        return view('admin.admin-view-specialities');
    }
    public function add_doctor(Request $request)
    {
        return view('admin.admin-add-doctor');
    }
    public function view_doctors(Request $request)
    {
        $doctors = Doctor::all();
        return view('admin.admin-view-doctors', ['doctors' => $doctors]);
    }
    public function add_patient(Request $request)
    {
        return view('admin.admin-add-patient');
    }
    public function view_patients(Request $request)
    {
        $patients = Patient::all();
        return view('admin.admin-view-patients', ['patients' => $patients]);
    }
}

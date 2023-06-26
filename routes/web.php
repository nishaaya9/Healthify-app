<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// User Routes

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/search-doctor', 'search_doctor')->name('search-doctor');    
    Route::get('/register', 'register')->name('register');
    Route::post('/create', 'create')->name('create');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_post')->name('loginpost');
    Route::get('/doctor-dashboard', 'doctor')->name('doctor-dashboard');
    Route::get('/patient-dashboard', 'patient')->name('patient-dashboard');
    Route::get('/doctor-profile', 'doctor_profile')->name('doctor-profile');    
});


// Admin Routes

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin-register', 'admin_register')->name('admin-register');
    Route::post('/admin-create', 'admin_create')->name('admin-create');
    Route::get('/admin-login', 'admin_login')->name('admin-login');
    Route::post('/admin-login', 'login_check')->name('login-check');
    Route::get('/admin-dashboard', 'admin_dashboard')->name('admin-dashboard');
    Route::get('/admin-appointment', 'index')->name('admin-appointment');
    Route::get('/admin-add-specialities', 'add_specialities')->name('add-specialities');
    Route::get('/admin-view-specialities', 'view_specialities')->name('view-specialities');
    Route::post('/admin-add-doctor', 'add_doctor')->name('add-doctor');
    Route::get('/admin-view-doctors', 'view_doctors')->name('view-doctors');
    Route::post('/admin-add-patient', 'add_patient')->name('add-patient');
    Route::get('/admin-view-patients', 'view_patients')->name('view-patients');
});


// Doctor Routes

Route::controller(DoctorController::class)->group(function () {
    Route::post('/create-doctor', 'create')->name('create-doctor');
    Route::get('/doctor-change-password', 'doctor_change_password')->name('doctor-change-password');
    Route::get('/my-patients', 'my_patients')->name('my-patients');
    Route::get('/doctor-profile-settings', 'doctor_profile_settings')->name('doctor-profile-settings');
});


// Patient Routes

Route::controller(PatientController::class)->group(function () {
    Route::get('/profile-settings', 'profile_settings')->name('profile-settings');
    Route::get('/change-password', 'patient_change_password')->name('change-password');
    Route::get('/booking/{id}', 'booking')->name('booking');
    Route::post('/book', 'book')->name('book');
    Route::get('/booking-success', 'booking_success')->name('booking-success');
});










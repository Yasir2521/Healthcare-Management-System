<?php

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;

use App\Http\Controllers\SubmitAppointmentController;
use App\Http\Controllers\ScheduleController;

use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/about', [AboutController::class, 'about_us'])->name('homepage');


Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/add_seminar_view',[AdminController::class,'addseminar']);
Route::post('/upload_seminar',[AdminController::class,'uploadseminar']);

Route::get('/appointment_view', [AppointmentController::class, 'addreg']);
Route::post('/submit_appointment', [AppointmentController::class, 'store']);
Route::get('/submit_appointment', [SubmitAppointmentController::class, 'submit']);



// Route::get('/delivery', [DeliveryController::class, 'delivery'])->name('delivery');


Route::get('/doctorscheduleview',[ScheduleController::class,'schedule']);


Route::post('/upload_schedule',[ScheduleController::class,'store']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',

// ])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin.home');
//     })->name('admin.home');
// });

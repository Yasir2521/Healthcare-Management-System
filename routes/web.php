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
use App\Http\Controllers\AuthController;

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

Route::get('/add_delivery_view',[AdminController::class,'add_delivery_view']);
Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/add_seminar_view',[AdminController::class,'addseminar']);
Route::post('/upload_seminar',[AdminController::class,'uploadseminar']);

Route::get('/review_view',[AuthController::class,'addreview']);
Route::get('/upload_review',[AuthController::class,'uploadreview']);

Route::get('/add_blood_view',[AdminController::class,'addblood']);
Route::post('/upload_blood',[AdminController::class,'uploadblood']);


Route::get('/appointment_view', [AppointmentController::class, 'addreg']);
Route::post('/submit_appointment', [AppointmentController::class, 'store']);
Route::get('/submit_appointment', [SubmitAppointmentController::class, 'submit']);
Route::get('/doctor_view', [AppointmentController::class, 'doctor_view']);
Route::get('/appoint_view', [AppointmentController::class, 'appoint_view']);
Route::get('/schedule_view', [AppointmentController::class, 'schedule_view']);
Route::get('/seminar_view', [AppointmentController::class, 'seminar_view']);
Route::get('/seminar', [AboutController::class, 'seminar'])->name('seminar');
Route::get('/blood_view', [AppointmentController::class, 'blood_view']);
Route::get('/medicine_view', [AppointmentController::class, 'medicine_view']);
Route::get('/see_review_view', [AppointmentController::class, 'review_view']);

Route::get('/add_medicine_view',[AdminController::class,'add_medicine_view']);
Route::post('/upload_medicine',[AdminController::class,'upload_medicine']);




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

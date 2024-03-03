<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SubmitAppointmentController;

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
Route::get('/appointment_view', [AppointmentController::class, 'addreg']);
Route::post('/submit_appointment', [AppointmentController::class, 'store']);
Route::get('/submit_appointment', [SubmitAppointmentController::class, 'submit']);


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

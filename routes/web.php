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
Route::get('/homeexercise', [AboutController::class, 'exercise']);
Route::get('/goodfood', [AboutController::class, 'food']);
Route::get('/anxiety', [AboutController::class, 'anxiety']);

Route::get('/add_delivery_view',[AdminController::class,'add_delivery_view']);
Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/add_deliveryman_view',[AdminController::class,'add_del_view']);
Route::post('/upload_deliveryman',[AdminController::class,'add_deliveryman']);
Route::get('/add_seminar_view',[AdminController::class,'addseminar']);
Route::post('/upload_seminar',[AdminController::class,'uploadseminar']);

Route::get('/add_tip_view',[AdminController::class,'addtip']);
Route::post('/upload_tip',[AdminController::class,'uploadtip']);

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
Route::get('/tip', [AboutController::class, 'tip'])->name('tip');

Route::get('/hospital', [AboutController::class, 'hospital'])->name('hospital');

Route::get('/review', [AboutController::class, 'review'])->name('review');
Route::get('/blood_view', [AppointmentController::class, 'blood_view']);
Route::get('/medicine_view', [AppointmentController::class, 'medicine_view']);
Route::get('/vehicle_view', [AppointmentController::class, 'vehicle_view']);
Route::get('/hospital_view', [AppointmentController::class, 'hospital_view']);
Route::get('/see_review_view', [AppointmentController::class, 'review_view']);
Route::get('/add_medicine_view',[AdminController::class,'add_medicine_view']);
Route::post('/upload_medicine',[AdminController::class,'upload_medicine']);

Route::get('/tip_view', [AppointmentController::class, 'tip_view']);


Route::get('/add_hospital_view',[AdminController::class,'add_hospital_view']);
Route::post('/upload_hospital',[AdminController::class,'upload_hospital']);

Route::get('/add_transportation', [AdminController::class, 'add_transportation']);

Route::post('/upload_transportation', [AdminController::class, 'upload_transportation']);

Route::get('/add_appoin',[AdminController::class,'add_appoin']);
Route::post('/upload_appoin',[AdminController::class,'upload_appoin']);


Route::get('/add_message',[AdminController::class,'add_message']);
Route::post('/upload_message',[AdminController::class,'upload_message']);



Route::post('/cancel_appointment',[AdminController::class,'cancel_appointment']);
Route::post('/cancel_order',[AdminController::class,'cancel_order']);


Route::post('/add_to_cart',[AdminController::class,'add_to_cart']);
Route::get('/go_to_cart',[AdminController::class,'go_to_cart']);
Route::post('/update_price',[AdminController::class,'update_price']);



Route::get('/blooddelivery',[AdminController::class,'add_blooddelivery_view']);
Route::post('/upload_blooddelivery',[AdminController::class,'upload_blooddelivery']);
 
Route::get('/ordermedicine',[AdminController::class,'add_ordermedicine_view']);
Route::post('/upload_ordermedicine',[AdminController::class,'upload_ordermedicine']);


Route::get('/doctor_view_appointments',[AdminController::class,'doctor_view_appointments']);
Route::get('/doc_up_schedule',[AdminController::class,'doc_up_schedule']);
Route::post('/updated_schedule',[AdminController::class,'updated_schedule']);


Route::get('/user_view_appointments',[AdminController::class,'user_view_appointments']);



// Route::get('/delivery', [DeliveryController::class, 'delivery'])->name('delivery');


Route::get('/doctorscheduleview',[ScheduleController::class,'schedule']);


Route::post('/upload_schedule',[ScheduleController::class,'store']);

Route::get('/view_doctors_for_messaging', [AdminController::class, 'viewDoctorsForMessaging'])->name('view_doctors_for_messaging');

Route::get('/add_order_view',[AdminController::class,'add_order_view']);
Route::post('/upload_order',[AdminController::class,'upload_order']);




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

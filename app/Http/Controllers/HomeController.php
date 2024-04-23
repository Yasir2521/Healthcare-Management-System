<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Auth;
// use Hash;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\patient_appointment;
use App\Models\Schedule;
use App\Models\seminar;
use App\Models\Blood;
use App\Models\medi;
use App\Models\Reviwe;
use App\Models\hospital;
use App\Models\vehicle;
use App\Models\tip;




class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::check())
        {
           if(Auth::user()->usertype=='0')
           {
            $doctor = doctor::all();
            $blood = blood::all();
            $reviwe = reviwe::all();
            $vehicle = vehicle::all();
            $tip = tip::all();
            $hospital = hospital::all();
            $add_medicine = medi::all();
            $seminar = seminar::all();
            $schedule = Schedule::with('user')->whereHas('user', function ($query) {
              $query->where('usertype', 2);
          })->get();

            

             return view('user.home',compact('doctor', 'schedule', 'seminar', 'blood', 'add_medicine', 'reviwe', 'vehicle', 'hospital', 'tip'));
           }
           else if(Auth::user()->usertype=='1')
           {
            $doctor = doctor::all();
            $reviwe = reviwe::all();
            $appointment = patient_appointment::with('user')->whereHas('user', function ($query) {
              $query->where('usertype', 0); // Assuming '0' represents the patient user type
          })->get();
             return view('admin.home',compact('doctor', 'appointment', 'reviwe'));
           }
           else if(Auth::user()->usertype=='2')
           {
            $seminar = seminar::all();
             return view('doctor.home');
           }
           else if(Auth::user()->usertype=='3')
           {
             return view('delivery.home');
           }


        }
        else
        {
            return redirect()->back();
        }
    }

    // public function index()
    // {
    //   $doctor = doctor::all();

    //   return view('user.home',compact('doctor'));
    // }
}

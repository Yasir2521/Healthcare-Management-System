<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use Illuminate\Support\Facades\Auth;
use App\Models\patient_appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Schedule;
use App\Models\seminar;

class AppointmentController extends Controller
{

    public function addreg( )
    {
        
        return view('user.add_appointment');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'doctor_name' => 'required|string',
            'phone' => 'required|string',
            'sex' => 'required|in:Male,Female',
            'specialty' => 'required|string',
        ]);
    
        // Create an instance using the validated data
        $appointment = new patient_appointment();
        $appointment->doctor_name = $validatedData['doctor_name'];
        $appointment->phone = $validatedData['phone'];
        $appointment->sex = $validatedData['sex'];
        $appointment->specialty = $validatedData['specialty'];


        $appointment->save();

        return redirect()->back()->with('message', 'Appointment created successfully');

    }

    public function doctor_view()
    {
        $doctor = doctor::all();
        return view('user.doctorslist',compact('doctor'));
    }

    public function appoint_view()
    {
        $appointment = patient_appointment::with('user')->get();
        return view('user.appointlist',compact('appointment'));
    }

    public function schedule_view()
    {
        $schedule = Schedule::with('user')->get();
        return view('user.schedulelist',compact('schedule'));
    }

    public function seminar_view()
    {
        $seminar = seminar::all();
        return view('user.seminarlist',compact('seminar'));
    }
    

}

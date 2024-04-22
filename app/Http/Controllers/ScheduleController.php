<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Schedule;

class ScheduleController extends Controller

{
    public function schedule()
    {

        return view('doctor.doctorschedule');
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'specialty' => 'required|string',
            'appointment_days' => 'required|array',
            'appointment_days.*' => 'string', // Each day in the array should be a string
            'date' => 'required|date',
            'time' => 'required|date_format:H:i', // Ensure the time is in the correct format
        ]);

        // Create a new DoctorSchedule instance
        $user = auth()->user();
        $schedule = new Schedule();
        $schedule->specialty = $validatedData['specialty'];
        $schedule->appointment_days = json_encode($validatedData['appointment_days']); // Convert array to JSON string
        $schedule->date = $validatedData['date'];
        $schedule->time = $validatedData['time'];
        $schedule->id = $user->id;

        // Save the schedule to the database
        $schedule->save();

        // Redirect the user after successful submission (you may modify this according to your application logic)
        return redirect()->back()->with('message', 'Schedule created successfully');
    }    
}

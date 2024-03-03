<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitAppointmentController extends Controller
{
    public function submit()
    {
        return view('user.submitappointment');
    }
}

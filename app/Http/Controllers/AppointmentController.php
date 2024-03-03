<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function addreg( )
    {
        
        return view('user.add_appointment');

    }

}

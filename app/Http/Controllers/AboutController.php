<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;

class AboutController extends Controller
{
    public function about_us()
    {
        return view('about.home');
    }

    public function seminar()
    {
        $seminar = seminar::all();
        return view('user.seminarlistanother',compact('seminar'));
    }

    
}


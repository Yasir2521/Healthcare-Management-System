<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Auth;
// use Hash;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;



class HomeController extends Controller
{
    public function redirect()
    {

        if(Auth::check())
        {
           if(Auth::user()->usertype=='0')
           {
            $doctor = doctor::all();

             return view('user.home',compact('doctor'));
           }
           else if(Auth::user()->usertype=='1')
           {
            $doctor = doctor::all();
             return view('admin.home',compact('doctor'));
           }
           else if(Auth::user()->usertype=='2')
           {
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

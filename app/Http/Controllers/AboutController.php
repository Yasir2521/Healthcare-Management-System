<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seminar;
use App\Models\tip;
use App\Models\reviwe;
use App\Models\hospital;

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

    public function tip()
    {
        $tip = tip::all();
        return view('user.tiplistanother',compact('tip'));
    }

    public function hospital()
    {
        $hospital = hospital::all();
        return view('user.hospitallistanother',compact('hospital'));
    }

    public function review()
    {
        $reviwe = reviwe::all();
        return view('user.reviewlistanother',compact('reviwe'));
    }

    public function exercise()
    {
        return view('about.exercise');
    }

    public function food()
    {
        return view('about.food');
    }

    public function anxiety()
    {
        return view('about.anxiety');
    }

    
}


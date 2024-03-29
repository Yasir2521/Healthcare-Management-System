<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\seminar;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;
    $imagename = time().'.'.$image->getClientoriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;

    $doctor->name=$request->name;
    $doctor->phone=$request->number;
    $doctor->email=$request->email;
    $doctor->speciality=$request->speciality;

    $doctor->save();
    return redirect()->back()->with('message','Doctor Added Successfully');
    
    }
    public function addseminar()
    {
        return view('admin.add_seminar');
    }

    public function uploadseminar(Request $request)
    {
        $seminar = new seminar; 
    
    $seminar->name=$request->name;
    $seminar->date=$request->date;
    $seminar->time=$request->time;
    $seminar->description=$request->description;

    $seminar->save();
    return redirect()->back()->with('message','Seminar Details Added Successfully');
    }
}

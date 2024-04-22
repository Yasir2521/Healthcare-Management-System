<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\seminar;
use App\Models\hospital;
use App\Models\vehicle;


use App\Models\medi;

use App\Models\Blood;

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

    public function add_delivery_view()
    {
        return view('admin.add_delivery');
    
    }

    public function addblood()
    {
        return view('admin.add_blood');
    }

    public function uploadblood(Request $request)
    {
        $blood = new blood; 
    
    $blood->name=$request->name;
    $blood->email=$request->email;
    $blood->type=$request->type;
    $blood->phone=$request->number;

    $blood->save();
    return redirect()->back()->with('message','Blood Added Successfully');
    }

    public function add_medicine_view()
    {
        return view('admin.add_medicine');
    }
   
    public function upload_medicine(Request $request)
    {
        $add_medicine = new medi();

    // Handle file upload
    $image = $request->file('file');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move(public_path('medicine_images'), $imageName);
    
    // Store form data in database
    $add_medicine->name = $request->name;
    $add_medicine->power = $request->power;
    $add_medicine->type = $request->type;
    $add_medicine->manufacture_date = $request->manufacture_date;
    $add_medicine->expiry_date = $request->expiry_date;
    $add_medicine->disease_type = $request->disease_type;
    
    $add_medicine->image_path = $imageName; // Assuming the image path is stored in the 'image_path' column

    $add_medicine->save();

    // Redirect back with success message
    return redirect()->back()->with('message', 'Medicine added successfully');
    }

    public function add_transportation()
    {
    return view('admin.transport');
    }


    public function upload_transportation(Request $request)
    {
        $vehicle = new vehicle();

    // Handle file upload
   
   
   

    $vehicle->type=$request->type;
    $vehicle->phone=$request->phone;
    $vehicle->number=$request->number;
    
     

    $vehicle->save();

    // Redirect back with success message
    return redirect()->back()->with('message', 'Vehicle added successfully');
    }




    public function add_hospital_view()
    {
        return view('admin.add_hospital');
    }
    public function upload_hospital(Request $request)
    {
        $hospital = new hospital();

    // Handle file upload
   
   
   

    $hospital->name=$request->name;
    $hospital->location=$request->location;
    $hospital->website=$request->website;
    
     

    $hospital->save();

    // Redirect back with success message
    return redirect()->back()->with('message', 'Hospital added successfully');
    }




}

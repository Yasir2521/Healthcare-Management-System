<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\seminar;

use App\Models\hospital;
use App\Models\vehicle;


use App\Models\blooddelivery;
use App\Models\User;


use App\Models\medi;

use App\Models\Blood;
use App\Models\appoin;
use App\Models\Schedule;

class AdminController extends Controller
{

    public function doc_up_schedule()
    {
        $doctorID = Auth::user()->id;

    
        $schedule = Schedule::where('user_id', $doctorID)->get();

        return view('doctor.update_schedule',['schedule' => $schedule]);
    }
    public function updated_schedule(Request $request)
    {
        $doctorID = Auth::user()->id;

        // Retrieve the schedule for the authenticated doctor
        $schedule = Schedule::where('user_id', $doctorID)->firstOrFail();
    
        // Assuming $request contains validated data
        $validatedData = $request->all();
    
        // Update schedule properties
        $schedule->specialty = $validatedData['specialty'];
        $schedule->appointment_days = json_encode($validatedData['appointment_days']); // Convert array to JSON string
        $schedule->date = $validatedData['date'];
        $schedule->time = $validatedData['time'];
    
        // Save the updated schedule
        $schedule->save();

        return redirect()->back()->with('message','Schedule updated Successfully');
    }




    public function doctor_view_appointments()
    {
    // Get the authenticated doctor's ID
    $doctorID = Auth::user()->id;

    // Fetch all the appointments where doctor_id matches $doctorID
    $appointments = Appoin::where('doctor_id', $doctorID)->get();

    // Pass the appointments data to the view
    return view('doctor.doc_appointments', ['appointments' => $appointments]);
    }


    public function user_view_appointments()
    {
    // Get the authenticated doctor's ID
    $userID = Auth::user()->id;

    // Fetch all the appointments where doctor_id matches $doctorID
    $appointments = Appoin::where('patient_id', $userID)->with('doctor')->get();

    // Pass the appointments data to the view
    return view('user.view_appointments', ['appointments' => $appointments]);
    }


    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
    $doctor = new User;
    $doctor->name=$request->name;
    $doctor->email=$request->email;
    $doctor->phone=$request->phone;
    $doctor->adress=$request->adress;
    $doctor->usertype='2';
    $hashedPassword = bcrypt($request->password);

    $doctor->password=$hashedPassword;

        

    $doctor->save();
    return redirect()->back()->with('message','Doctor Added Successfully');
    
    }

    public function add_del_view()
    {
        return view('admin.add_deliveryman');
    }

    public function add_deliveryman(Request $request)
    {
    $deliveryman = new User;
    $deliveryman->name=$request->name;
    $deliveryman->email=$request->email;
    $deliveryman->phone=$request->phone;
    $deliveryman->adress=$request->adress;
    $deliveryman->usertype='3';
    $hashedPassword = bcrypt($request->password);

    $deliveryman->password=$hashedPassword;

    $deliveryman->save();
    return redirect()->back()->with('message','Delivery Man Added Successfully');
    
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
    $add_medicine->amount = $request->amount;
    
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




    public function add_blooddelivery_view()
    {
        return view('admin.blooddelivery');
    }
   
    public function upload_blooddelivery(Request $request)
    {
       
        $blooddelivery = new blooddelivery();

    // Handle file upload
    
    
    // Store form data in database
    
    $blooddelivery->user_id = Auth::user()->id;
    $blooddelivery->email = $request->email;
    $blooddelivery->address = $request->address;
    

    $blooddelivery->save();

    // Redirect back with success message
    return redirect()->back()->with('message', 'Blood Ordered successfully');
    }

    public function add_appoin(Request $request)
    {
        $user_id = $request->query('user_id');
        return view('user.add_appoin', compact('user_id'));
    }

    public function upload_appoin(Request $request)
    {
        
        $appoin = new appoin();
        
    
    $appoin->name=$request->name;
    $appoin->age=$request->age;
    $appoin->type=$request->type;
    $appoin->number=$request->number;
    $appoin->description=$request->description;
    $appoin->patient_id = Auth::user()->id;
    $doctorId = $request->query('user_id');
    $appoin->doctor_id = $doctorId;
    

    $appoin->save();
    return redirect()->back()->with('message','Appointment Taken Successfully');
    }




}

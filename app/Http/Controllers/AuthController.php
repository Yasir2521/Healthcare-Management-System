<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reviwe;

class AuthController extends Controller
{
    public function addreview()
    {
        return view('user.add_review');
    }
    public function uploadreview(Request $request)
    {
        $reviwe = new reviwe; 
    
    $reviwe->comment=$request->comment;
    $reviwe->rating=$request->rating;

    $reviwe->save();
    return redirect()->back()->with('message','Review Added Successfully');
    }

}
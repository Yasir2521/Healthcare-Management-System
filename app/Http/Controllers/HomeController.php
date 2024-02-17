<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id())
        {
            $usertype=Auth()->usertype;

            if($usertype=='0')
            {
                return view('dashboard');
            }
            else if($usertype=='1')
            {
                return view('admin.adminhome');
            }
        }

        else
        {
            return redirect()->back();
        }
    }
}

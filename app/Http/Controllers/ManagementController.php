<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ManagementController extends Controller
{
    public function index(){
        return view('adminLogin');
    }

    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt( ['email'=>$request['email'],
        'password'=>$request['password']] )) 
        {
            if ($request->user('admin')->admin_level > 0) {
                return redirect()->view('admin');
            } else {
                return redirect()->view('manager');
            }
        }
        return redirect()->route('admin.index');
    }

    

    public function manage()
    {
        return view('manage');
    }
}

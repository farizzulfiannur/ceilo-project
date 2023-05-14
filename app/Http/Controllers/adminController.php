<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    function dashboard(){
        Auth::user()->id;
        return view('admin.home');
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

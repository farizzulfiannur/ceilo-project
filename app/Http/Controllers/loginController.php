<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    function login(){
        return view('login');
    }

    public function proseslogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' =>$request->password
        ];

        if(Auth::attempt($data)){
            // dd('Berhasil Login');
            return redirect()->route('dashboard');
        }else{
            // dd('Gagal Login');
            Session::flash('gagal','Email / Password Anda Salah');
            return redirect()->route('login');
        }
    }

    function prosesregistrasi(Request $request){
        
        // dd($request);

        $user = User::create([
            'email' => $request -> email,
            'password' => Hash::make($request ->password),
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
        ]);

        if($user){
            Session::flash('berhasil', 'Berhasil Melakukan Registrasi');
            return redirect()->route('login');
        }else{
            Session::flash('gagal', 'Gagal Melakukan Registrasi');
            return redirect()->route('login');
        }
    }
}

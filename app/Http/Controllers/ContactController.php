<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    function sendcontact(Request $request)
    {
        // dd($request);
        $data = contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $data->save();

        if ($data) {
            Session::flash('berhasilcontact', 'Pesan Telah Terkirim');
            return redirect()->route('index');
        }
        else{
            Session::flash('gagalcontact','Maaf Pesan Gagal Terkirim');
            return redirect()->route('index');
        }
    }

    function contact(){
        $contact = contact::all();
        // dd($contact);
        return view('admin.contact',compact('contact'));

    }

    function deletecontact($id){
        $contact = contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact');
    }
}

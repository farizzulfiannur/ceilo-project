<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    function adminclient(){
        $client = client::all();
        return view('admin.client',compact('client'));
    }

    function tambahclient(){
        return view('admin.client.tambahclient'); 
    }

    function storeclient(Request $request){

        if ($request->hasFile('client_img')) {
            $file = $request->file("client_img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("clientImg/"), $imageName);
            $data = client::create([
                'client_name' => $request->client_name,
                'client_img' => $imageName,
            ]);
            $data->save();
            return redirect()->route('adminclient');
        }   
    }

    public function editclient($id)
    {
        $client = client::findOrFail($id);
        return view('admin.client.editclient', compact('client'));
    }

    public function updateclient(Request $request, $id){
        $client = client::findOrFail($id);
        if ($request->hasFile("client_img")) {
            if (File::exists("clientImg/" . $client->client_img)) {
                File::delete("clientImg/" . $client->client_img);
            }  
            $file = $request->file("client_img");
            $client->client_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/clientImg"), $client->client_img);
            $request['client_img'] = $client->client_img;
        }
        $client->update([
            'client_name' => $request->client_name,
            'client_img' => $client->client_img,
        ]);

        return redirect()->route('adminclient');
    }

    public function deleteclient($id)
    {
        client::destroy($id);
        return redirect()->route('adminclient');
    }
}

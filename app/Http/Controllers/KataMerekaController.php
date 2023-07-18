<?php

namespace App\Http\Controllers;

use App\Models\kata_mereka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KataMerekaController extends Controller
{
    function adminkata(){
        $katamereka = kata_mereka::all();
        return view('admin.katamereka',compact('katamereka'));
    }
    
    function tambahkata(){
        return view('admin.kata.tambah');
    }

    function storekata(Request $request){
        // dd($request);
        // $request->validate([
        //     'testi_name' => 'required',
        //     'testi_desc' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        if ($request->hasFile('testi_img')) {
            $file = $request->file("testi_img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("testiImg/"), $imageName);
            $data = kata_mereka::create([
                'testi_name' => $request->testi_name,
                'testi_desc' => $request->testi_desc,
                'testi_img' => $imageName,
            ]);
            $data->save();
            return redirect()->route('adminkata');
        }   
    }

    public function editkata($id)
    {
        $katamereka = kata_mereka::findOrFail($id);
        return view('admin.kata.edit', compact('katamereka'));
    }

    public function updatekata(Request $request, $id){
        $katamereka = kata_mereka::findOrFail($id);
        if ($request->hasFile("testi_img")) {
            if (File::exists("testiImg/" . $katamereka->testi_img)) {
                File::delete("testiImg/" . $katamereka->testi_img);
            }  
            $file = $request->file("testi_img");
            $katamereka->testi_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/testiImg"), $katamereka->testi_img);
            $request['testi_img'] = $katamereka->testi_img;
        }
        $katamereka->update([
            'testi_name' => $request->testi_name,
            'testi_desc' => $request->testi_desc,
            'testi_img' => $katamereka->testi_img,
        ]);

        return redirect()->route('adminkata');
    }

    public function deletekata($id)
    {
        kata_mereka::destroy($id);
        return redirect()->route('adminkata');
    }

}

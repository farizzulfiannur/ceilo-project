<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function adminproduct(){
        $product = product::all();
        return view('admin.products',compact('product'));
    }

    function tambahproduct(){
        return view('admin.product.tambahproduct'); 
    }

    function storeproduct(Request $request){

        if ($request->hasFile('product_img')) {
            $file = $request->file("product_img");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("productImg/"), $imageName);
            $data = product::create([
                'product_category' => $request->product_category,
                'product_link' => $request->product_link,
                'product_img' => $imageName,
            ]);
            $data->save();
            return redirect()->route('adminproduct');
        }   
    }

    public function editproduct($id)
    {
        $product = product::findOrFail($id);
        return view('admin.product.editproduct', compact('product'));
    }

    public function updateproduct(Request $request, $id){
        $product = product::findOrFail($id);
        if ($request->hasFile("product_img")) {
            if (File::exists("productImg/" . $product->product_img)) {
                File::delete("productImg/" . $product->product_img);
            }  
            $file = $request->file("product_img");
            $product->product_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/productImg"), $product->product_img);
            $request['product_img'] = $product->product_img;
        }
        $product->update([
            'product_category' => $request->product_category,
            'product_link' => $request->product_link,
            'product_img' => $product->product_img,
        ]);

        return redirect()->route('adminproduct');
    }

    public function deleteproduct($id)
    {
        product::destroy($id);
        return redirect()->route('adminproduct');
    }
}
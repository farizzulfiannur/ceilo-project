<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\kata_mereka;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        $katamereka = kata_mereka::all();
        $product = product::all();
        $client = client::all();
        return view('home',compact('katamereka','product','client'));
    }

    function product(){
        return view('product');
    }

    function contactku(){
        return view('contact');
    }

}

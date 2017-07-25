<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $shoes=Product::take(8)->get();
        return view('front.home',compact('shoes'));
    }
    public function shoes()
    {
        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }
    public function shoe($id)
    {
         $shirts=Product::where('id',$id)->get();
        return view('front.shirt',compact('shirts'));
    }
}
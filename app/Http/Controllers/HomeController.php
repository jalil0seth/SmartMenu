<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $products = Product::all();
            $categories = Category::all();
            $setting = Setting::first();
            return view('menu',compact('products','categories','setting'));
    }

    public function order()
    {
            $products = Product::all();
            $categories = Category::all();
            $setting = Setting::first();
            return view('order',compact('products','categories','setting'));
    }

    public function order_post(Request $request)
    {
        return json_decode($request->cartContent, false);
    }

    
}

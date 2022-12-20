<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\Region;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return redirect('fr');
    }

    public function fr(Request $request)
    {
            $host =  $request->getHttpHost();

            $products = Product::orderBy('rank','asc')->get();
            $categories = Category::orderBy('rank','asc')->get();
            $discounts = DB::select("select category_id,max((old_price-price)*100/old_price) as discount from products where old_price is not null and old_price-price>0 group by category_id"); 
            $setting = Setting::first();
            return view('style'.$setting->style,compact('products','categories','setting','discounts','host'));
    }


    public function ar()
    {
            $products = Product::orderBy('rank','asc')->get();
            $categories = Category::orderBy('rank','asc')->get();
            $discounts = DB::select("select category_id,max((old_price-price)*100/old_price) as discount from products where old_price is not null and old_price-price>0 group by category_id"); 
            $setting = Setting::first();
            return view('ar.style'.$setting->style,compact('products','categories','setting','discounts'));
    }

    public function cat($lang, $id, $name,Request $request)
    {
            $products = Product::where('category_id',$id)->orderBy('rank','asc')->get();
            $cat = Category::where('id',$id)->first();
            $setting = Setting::first();
            $discounts = DB::select("select category_id,max((old_price-price)*100/old_price) as discount from products where old_price is not null and old_price-price>0 group by category_id"); 

            if ($lang == 'ar') {
                $lang = 'ar.';
            } else {
                $lang = '';
            }
            $host =  $request->getHttpHost();
            
            return view($lang.'cat',compact('products','cat','setting','discounts','host'));
    }

    public function order()
    {
            $products = Product::all();
            $categories = Category::all();
            $setting = Setting::first();
            $regions = Region::orderBy('regions','asc')->get();
            return view('order',compact('products','categories','setting','regions'));
    }

    public function track($id)
    {
            $setting = Setting::first();
            $order = Order::where('ref',$id)->first();
            $orderd = Orderdetail::where('order_id',$order->id)->get();
            return view('thankyou',compact('order','setting','orderd'));
    }

    public function order_post_3(Request $request)
    {
        $cart_data = json_decode($request->cartContent, true);

        foreach ($cart_data as $cart) {
            $cart['productid'];
            $cart['count'];
            $cart['name'];
            $cart['price'];
          }

    }

    public function order_post(Request $request)
    {

        // create customer
        $client = Client::updateOrCreate(
        ['phone' => $request->phone],
        [
            'adresse' => $request->address,
            'name' => $request->nom, 
            'region_id' => $request->region,
            'coordinates' => '', 
            'coordinates_map' => '',
        ]);

        // create order
        $order = new Order;
        $order->client_id = $client->id;
        $order->livreur_id = 1;
        $order->status = 'nouveau';
        $order->ref = 'A'.rand(10000,100000);
        $order->notes = $request->notes;
        $order->total = $request->total;
        $order->livraison = strval($request->livraison);
        $order->save();

        // create order_detail
        $cart_data = json_decode($request->cartContent, true);

        foreach ($cart_data as $cart) {
            $orderd = new Orderdetail;
            $orderd->order_id = $order->id;
            $orderd->product_id = $cart['productid'];
            $orderd->total = $cart['price']*$cart['count'];
            $orderd->quantity = $cart['count'];
            $orderd->productname = $cart['name'];
            $orderd->image = $cart['imgproduct'];
            $orderd->discount = 0;
            $orderd->save();
          }
        
        return redirect('track/'.$order->ref);;


    }

    
}

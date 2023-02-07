<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\Coupon;
use App\Models\Region;
use App\Mail\TestEmail;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public function checkDiscount(Request $request)
    {
        $discountCode = $request->input('code');
        $coupon = Coupon::whereCode($discountCode)->whereValid(1)->first();
        if ($coupon) {
            return response()->json([
                'exists' => true,
                'percentage' => $coupon->percentage,
                'code' => $coupon->code,
            ]);
        } else {
            return response()->json([
                'exists' => false,
            ]);
        }
    }
    

    public function last_order()
    {
        $last_order = Order::orderBy('id', 'desc')->first()->id;
            
        return response()->json([
            'last_order' => $last_order
        ]);
    }

    public function order(Request $request)
    {
            $products = Product::all();
            $categories = Category::all();
            $setting = Setting::first();
            $regions = Region::orderBy('regions','asc')->get();

            $host =  $request->getHttpHost();

            return view('order',compact('products','categories','setting','regions','host'));
    }

    public function track($id)
    {
            $setting = Setting::first();
            $order = Order::where('ref',$id)->first();
            if($order != ''){
                $orderd = Orderdetail::where('order_id',$order->id)->get();
                return view('thankyou',compact('order','setting','orderd'));
            }else{
                return redirect('fr');
            }

    }

    public function send_mail(Request $request)
    {
        $host =  $request->getHttpHost();

        $mailData = [
            "name" => "Test NAME",
            "dob" => "12/12/1990",
            "subject" => "Votre commande est bien reçu"
        ];
    
        Mail::to("jalilosum@gmail.com")->send(new TestEmail($mailData));
    
        dd("Mail Sent Successfully!");

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
            'email' => $request->email,
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
        $order->discount = $request->discount;
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

          $mailData = [
              "order_ref" => $order->ref,
              "name" => $request->nom,
              "image" => Setting::first()->logo['url'],
              "subject" => $request->nom.", votre commande est bien reçu",
              "store_name" => Setting::first()->nom,
              "store_url" => $request->getHttpHost(),
          ];
      
          try {
            Mail::to($request->email)->send(new TestEmail($mailData));
          } catch (\Throwable $th) {

          }
          

        return redirect('track/'.$order->ref);;


    }

    
}

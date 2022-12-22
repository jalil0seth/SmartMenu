<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Order;
use App\Models\Client;
use App\Models\Livreur;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Requests\MassDestroyOrderRequest;
use Symfony\Component\HttpFoundation\Response;

class OrdersController extends Controller
{
    public function index()
    {
                
        if( in_array("Livreur", Auth::user()->roles->pluck('title')->toArray())){
            return redirect('admin/orders/livreur/livraison');
        }

        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return redirect('admin/orders/filter/nouveau');
    }

    public function filter($status)
    {
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::with(['client'])->where('status', 'like', '%' . strtolower($status) . '%')->orderBy('id', 'DESC')->paginate(10);

        $new = Order::with(['client'])->where('status', 'like', '%nouveau%')->orderBy('id', 'DESC')->count();
        $prep = Order::with(['client'])->where('status', 'like', '%preparation%')->orderBy('id', 'DESC')->count();
        $enliv = Order::with(['client'])->where('status', 'like', '%livraison%')->orderBy('id', 'DESC')->count();
        $liv = Order::with(['client'])->where('status', 'like', '%Livré%')->orderBy('id', 'DESC')->count();
        $annulle = Order::with(['client'])->where('status', 'like', '%Annulée%')->orderBy('id', 'DESC')->count();

        $date_orders = array();
        foreach($orders as $order){
            array_push($date_orders,$order->created_at->format('d-m-Y'));
        }
        $date_orders = array_unique($date_orders);


        if(isset(Order::orderBy('id', 'desc')->first())){
            $last_order = Order::orderBy('id', 'desc')->first()->id;
        }else{
            $last_order = 0;
        }

        $clients = Client::get();

        return view('admin.orders.index', compact('clients', 'orders','new','prep','enliv','liv','annulle','date_orders','status','last_order'));
    }

    public function livreur($status)
    {
        abort_if(Gate::denies('Livreur'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $livX = Livreur::where('user_id',Auth::user()->id)->first()->id;

        $orders = Order::with(['client'])->where('livreur_id',$livX)->where('status', 'like', '%' . strtolower($status) . '%')->orderBy('id', 'DESC')->get();

        $enliv = Order::with(['client'])->where('livreur_id',$livX)->where('status', 'like', '%livraison%')->count();
        $liv = Order::with(['client'])->where('livreur_id',$livX)->where('status', 'like', '%Livré%')->count();
        $annulle = Order::with(['client'])->where('livreur_id',$livX)->where('status', 'like', '%Annulée%')->count();

        $clients = Client::get();

        return view('admin.orders.index2', compact('livX','clients', 'orders','enliv','liv','annulle'));
    }

    

    public function create()
    {
        abort_if(Gate::denies('order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orders.create', compact('clients'));
    }

    public function store(StoreOrderRequest $request)
    {
        $order = Order::create($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function edit(Order $order)
    {
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $order->load('client');

        return view('admin.orders.edit', compact('clients', 'order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());

        return redirect()->route('admin.orders.index');
    }

    public function show(Order $order)
    {
        //abort_if(Gate::denies(['order_show','Livreur']), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $status_orders = ['Nouveau','En cours de préparation', 'En cours de livraison','Livré','Annulée'];
        $status_orders2 = ['En cours de livraison','Livré','Annulée'];

        $livreurs = Livreur::get();

        $orderd= Orderdetail::where('order_id',$order->id)->get();

        if(Livreur::where('user_id',Auth::user()->id)->count() != 0){
            $liv = Livreur::where('user_id',Auth::user()->id)->first()->id;

            if( in_array("Livreur", Auth::user()->roles->pluck('title')->toArray()) and $liv != $order->livreur_id){
                return redirect('admin/orders/livreur/livraison');
            }
        }

        $order->load('client');

        return view('admin.orders.show', compact('order','status_orders','status_orders2','orderd','livreurs'));
    }


    public function changeit(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status  = $request->status;

        if( in_array("Livreur", Auth::user()->roles->pluck('title')->toArray())){
            $order->save();
            return redirect()->to('/admin/orders/'.$request->order_id);
        }
        $order->livreur_id  = $request->livreur;
        $order->save();
        return redirect()->to('/admin/orders/'.$request->order_id);
    }


    public function destroy(Order $order)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

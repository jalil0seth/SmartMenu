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
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return redirect('admin/orders/filter/nouveau');
    }

    public function filter($status)
    {
        abort_if(Gate::denies('order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::with(['client'])->where('status', 'like', '%' . strtolower($status) . '%')->orderBy('id', 'DESC')->get();

        $new = Order::with(['client'])->where('status', 'like', '%nouveau%')->orderBy('id', 'DESC')->count();
        $prep = Order::with(['client'])->where('status', 'like', '%preparation%')->orderBy('id', 'DESC')->count();
        $enliv = Order::with(['client'])->where('status', 'like', '%livraison%')->orderBy('id', 'DESC')->count();
        $liv = Order::with(['client'])->where('status', 'like', '%Livré%')->orderBy('id', 'DESC')->count();
        $annulle = Order::with(['client'])->where('status', 'like', '%Annulée%')->orderBy('id', 'DESC')->count();

        $clients = Client::get();

        return view('admin.orders.index', compact('clients', 'orders','new','prep','enliv','liv','annulle'));
    }

    public function livreur($status)
    {
        abort_if(Gate::denies('Livreur'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orders = Order::with(['client'])->where('livreur_id',Auth::user()->id)->where('status', 'like', '%' . strtolower($status) . '%')->orderBy('id', 'DESC')->get();

        $enliv = Order::with(['client'])->where('livreur_id',Auth::user()->id)->where('status', 'like', '%livraison%')->orderBy('id', 'DESC')->count();
        $liv = Order::with(['client'])->where('livreur_id',Auth::user()->id)->where('status', 'like', '%Livré%')->orderBy('id', 'DESC')->count();
        $annulle = Order::with(['client'])->where('livreur_id',Auth::user()->id)->where('status', 'like', '%Annulée%')->orderBy('id', 'DESC')->count();

        $clients = Client::get();

        return view('admin.orders.index2', compact('clients', 'orders','enliv','liv','annulle'));
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
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $status_orders = ['Nouveau','En cours de préparation', 'En cours de livraison','Livré','Annulée'];

        $livreurs = Livreur::get();

        $orderd= Orderdetail::where('order_id',$order->id)->get();

        $order->load('client');

        return view('admin.orders.show', compact('order','status_orders','orderd','livreurs'));
    }


    public function changeit(Request $request)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $order = Order::find($request->order_id);
        $order->status  = $request->status;

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

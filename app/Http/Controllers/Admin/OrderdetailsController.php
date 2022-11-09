<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderdetailRequest;
use App\Http\Requests\StoreOrderdetailRequest;
use App\Http\Requests\UpdateOrderdetailRequest;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderdetailsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('orderdetail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderdetails = Orderdetail::with(['product', 'order'])->get();

        $products = Product::get();

        $orders = Order::get();

        return view('admin.orderdetails.index', compact('orderdetails', 'orders', 'products'));
    }

    public function create()
    {
        abort_if(Gate::denies('orderdetail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $orders = Order::pluck('total', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.orderdetails.create', compact('orders', 'products'));
    }

    public function store(StoreOrderdetailRequest $request)
    {
        $orderdetail = Orderdetail::create($request->all());

        return redirect()->route('admin.orderdetails.index');
    }

    public function edit(Orderdetail $orderdetail)
    {
        abort_if(Gate::denies('orderdetail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $orders = Order::pluck('total', 'id')->prepend(trans('global.pleaseSelect'), '');

        $orderdetail->load('product', 'order');

        return view('admin.orderdetails.edit', compact('orderdetail', 'orders', 'products'));
    }

    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        $orderdetail->update($request->all());

        return redirect()->route('admin.orderdetails.index');
    }

    public function show(Orderdetail $orderdetail)
    {
        abort_if(Gate::denies('orderdetail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderdetail->load('product', 'order');

        return view('admin.orderdetails.show', compact('orderdetail'));
    }

    public function destroy(Orderdetail $orderdetail)
    {
        abort_if(Gate::denies('orderdetail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $orderdetail->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderdetailRequest $request)
    {
        Orderdetail::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

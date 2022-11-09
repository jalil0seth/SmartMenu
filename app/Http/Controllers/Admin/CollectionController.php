<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCollectionRequest;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Collection;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CollectionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('collection_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collections = Collection::with(['products'])->get();

        $products = Product::get();

        return view('admin.collections.index', compact('collections', 'products'));
    }

    public function create()
    {
        abort_if(Gate::denies('collection_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id');

        return view('admin.collections.create', compact('products'));
    }

    public function store(StoreCollectionRequest $request)
    {
        $collection = Collection::create($request->all());
        $collection->products()->sync($request->input('products', []));

        return redirect()->route('admin.collections.index');
    }

    public function edit(Collection $collection)
    {
        abort_if(Gate::denies('collection_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::pluck('name', 'id');

        $collection->load('products');

        return view('admin.collections.edit', compact('collection', 'products'));
    }

    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $collection->update($request->all());
        $collection->products()->sync($request->input('products', []));

        return redirect()->route('admin.collections.index');
    }

    public function show(Collection $collection)
    {
        abort_if(Gate::denies('collection_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection->load('products');

        return view('admin.collections.show', compact('collection'));
    }

    public function destroy(Collection $collection)
    {
        abort_if(Gate::denies('collection_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $collection->delete();

        return back();
    }

    public function massDestroy(MassDestroyCollectionRequest $request)
    {
        Collection::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

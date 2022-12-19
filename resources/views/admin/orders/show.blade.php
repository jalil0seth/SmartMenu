@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('global.show') }} {{ trans('cruds.order.title') }}
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-default" href="{{ route('admin.orders.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <form action="/admin/orders/changeOrder" method="post" >
                                                @csrf

                                            <tr id="{{$order->status}}">
                                                <th >
                                                    Status
                                                </th>
                                                <td>
                                                    <select name="status" id="status" class="custom-select rounded-0">
                                                        @can('Livreur') @php $status_orders = $status_orders2 @endphp @endcan
                                                        @foreach ($status_orders as $s)
                                                            <option value="{{ $s }}"
                                                                @if ($order->status == $s) selected @endif>
                                                                {{ ucfirst($s) ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Reference
                                                </th>
                                                <td>
                                                    {{ $order->ref ?? '' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Region
                                                </th>
                                                <td>
                                                    {{ \App\Models\Region::where('id',\App\Models\Client::where('id', $order->client_id)->pluck('region_id')->first())->pluck('regions')->first() ?? '' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-bordered table-striped">
                                        <tbody>

                                            <tr>
                                                <th>
                                                    Selectionner un livreur
                                                </th>
                                                <td>
                                                    @if ($order->livreur_id != '')
                                                        <img src="{{\App\Models\Livreur::find($order->livreur_id)->photo->getUrl('thumb')}}" width="40px" class="img-circle elevation-2" srcset="">
                                                    @endif
                                                    <select name="livreur" id="livreur" class="custom-select rounded-0" @can('Livreur') disabled @endcan>
                                                        <option value="">Selectionner un livreur</option>
                                                        @foreach ($livreurs as $liv)
                                                            <option value="{{ $liv->id }}"
                                                                @if ($order->livreur_id == $liv->id) selected @endif>
                                                                {{ ucfirst($liv->name) ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    
                                                </th>
                                                <td>
                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                    <button type="submit" class="btn btn-success" style="float:right">Enregistrer</button>
                                                </td>
                                            </tr>
                                        </tbody>

                                        </form>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Client
                                                </th>
                                                <td>
                                                    {{ $order->client->name ?? '' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Telephone
                                                </th>
                                                <td>
                                                    {{ $order->client->phone ?? '' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Region
                                                </th>
                                                <td>
                                                    {{ \App\Models\Region::where('id',\App\Models\Client::where('id', $order->client_id)->pluck('region_id')->first())->pluck('regions')->first() ?? '' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Adresse
                                                </th>
                                                <td>
                                                    {{ $order->client->adresse ?? '' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    Notes
                                                </th>
                                                <td>
                                                    {{ $order->notes ?? '' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    {{ trans('cruds.order.fields.livraison') }}
                                                </th>
                                                <td>
                                                    {{ $order->livraison }} DH
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Total
                                                </th>
                                                <td>
                                                    {{ $order->total + floatval($order->livraison) ?? '' }} DH
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table
                                                class=" table table-bordered table-striped table-hover datatable datatable-Order">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Quantity
                                                        </th>
                                                        <th>
                                                            Produit
                                                        </th>
                                                        <th>
                                                            Prix
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orderd as $o)
                                                        <tr data-entry-id="{{ $o->id }}">
                                                            <td>
                                                                {{ $o->quantity ?? '' }} x
                                                                <img src="{{ $o->image }}" width="40px" />
                                                            </td>
                                                            <td>
                                                                {{ ucfirst($o->productname) ?? '' }}
                                                            </td>
                                                            <td>
                                                                {{ $o->total / $o->quantity }} DH
                                                            </td>
                                                        <tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            @endsection

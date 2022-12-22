@extends('layouts.admin')
@section('content')
    <style>
        .slide-whatsapp {
            color: #025f06 !important;
        }

        .slide-phone {
            color: #008ff8 !important;
        }

        #icon {
            margin-right: 6px;
        }
    </style>
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
                                            <form action="/admin/orders/changeOrder" method="post">
                                                @csrf

                                                <tr id="{{ $order->status }}">
                                                    <th>
                                                        Status
                                                    </th>
                                                    <td>
                                                        <select name="status" id="status"
                                                            class="custom-select rounded-0">
                                                            @can('Livreur')
                                                                @php $status_orders = $status_orders2 @endphp
                                                            @endcan
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
                                                        Temps de commande
                                                    </th>
                                                    <td>
                                                        {{ $order->created_at }}
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
                                                    @if ($order->livreur_id != '' and isset(\App\Models\Livreur::find($order->livreur_id)->photo))
                                                        <img src="{{ \App\Models\Livreur::find($order->livreur_id)->photo->getUrl('thumb') }}"
                                                            width="40px" class="img-circle elevation-2" srcset="">
                                                    @else
                                                        <img src="{{ asset('noimg.jpeg') }}" width="40px"
                                                            class="img-circle elevation-2" srcset="">
                                                    @endif
                                                    <select name="livreur" id="livreur" class="custom-select rounded-0"
                                                        @can('Livreur') disabled @endcan>
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
                                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                    <button type="submit" class="btn btn-success"
                                                        style="float:right">Enregistrer</button>
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
                                                    <a
                                                        href="tel:{{ str_replace(' ', '', str_replace(' ', '', $order->client->phone)) }}"><i
                                                            class="fa-solid fa-2x fa-phone-volume slide-phone"></i>
                                                        Appeler</a>
                                                    : {{ $order->client->phone ?? '' }}

                                                    <hr>
                                                    <a href="https://api.whatsapp.com/send?phone=212{{ ltrim($order->client->phone, 'g') }}"
                                                        target="_blank"><i
                                                            class="fa-brands fa-2x  fa-whatsapp  slide-whatsapp"></i>
                                                        Whatsapp ( sans contenu )</a>
                                                    <hr>
                                                    <a href="https://api.whatsapp.com/send?phone=212{{ ltrim($order->client->phone, 'g') }}&text=Bonjour, vous avez ef
                                                        fectuez une commande chez TopTopDonuts.ma de {{ $order->total + floatval($order->livraison) ?? '' }} DH, référence de la commande : ( {{ $order->ref }} ), Merci de consulter le lien https://{{ $host }}/track/{{ $order->ref }} pour voir l'état de votre commande."
                                                        target="_blank"><i
                                                            class="fa-brands fa-2x  fa-whatsapp  slide-whatsapp"></i>
                                                        Whatsapp ( avec contenu ) <i
                                                            class="fa-sharp fa-2x fa-solid fa-envelope-open-text slide-whatsapp"></i></a>
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
                                            @if ($order->notes)
                                                <tr style="background-color: rgb(248, 255, 215)">
                                                    <th>
                                                        Notes
                                                    </th>
                                                    <td>
                                                        {{ $order->notes ?? '' }}
                                                    </td>
                                                </tr>
                                            @endif

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
                                    <div>
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
                                                    <tr style="background-color: #fff">
                                                        <td colspan="2">
                                                            <b>Commande</b>
                                                        </td>
                                                        <td>
                                                            <b>{{ $order->total }} DH</b>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fff">
                                                        <td colspan="2">
                                                            <b>Livraison</b>
                                                        </td>
                                                        <td>
                                                            <b>{{ $order->livraison }} DH</h3 </td>
                                                    </tr>
                                                    <tr style="background-color: #fff">
                                                        <td colspan="2">
                                                            <b>Total</b>
                                                        </td>
                                                        <td>
                                                            <b>{{ $order->total + floatval($order->livraison) ?? '' }}
                                                                DH</b>
                                                        </td>
                                                    </tr>
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

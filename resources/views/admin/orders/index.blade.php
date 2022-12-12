@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="{{ request()->is("admin/orders/filter/nouveau") ? "active nav-link" : "nav-link " }}" id="custom-tabs-one-home-tab" href="/admin/orders/filter/nouveau">Nouvelle commandes <span class="badge badge-primary" style="background-color:rgb(42, 138, 255) !important">{{$new}}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is("admin/orders/filter/preparation") ? "active nav-link" : "nav-link " }}" id="custom-tabs-one-profile-tab" href="/admin/orders/filter/preparation">En cours de préparation <span class="badge badge-primary" style="background-color:rgb(124, 177, 155) !important">{{$prep}}</a>
                         </li>
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/filter/livraison") ? "active nav-link" : "nav-link " }}" id="custom-tabs-one-messages-tab" href="/admin/orders/filter/livraison" >En cours de livraison <span class="badge badge-primary" style="background-color:rgb(246, 151, 74) !important">{{$enliv}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/filter/Livré") ? "active nav-link" : "nav-link " }}"  href="/admin/orders/filter/Livré" >Livrés <span class="badge badge-primary" style="background-color:rgb(81, 121, 104) !important">{{$liv}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/filter/Annulée") ? "active nav-link" : "nav-link " }}"  href="/admin/orders/filter/Annulée">Annulées <span class="badge badge-primary" style="background-color:#f00 !important">{{$annulle}}</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        Livreur
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Reference
                                    </th>
                                    <th>
                                        Region
                                    </th>
                                    <th>
                                        Client
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>

                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>

                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key => $order)
                                    <tr data-entry-id="{{ $order->id }}" >
                                        <td>

                                        </td>
                                        <td>
                                            @if ($order->livreur_id  != '')
                                                <img src="{{\App\Models\Livreur::find($order->livreur_id)->photo->getUrl('thumb')}}" width="40px" srcset="">
                                            @else
                                            <img src="{{asset('noimg.jpeg')}}" width="40px" srcset="">
                                            
                                            @endif
                                        </td>
                                        <td>
                                            {{ ucfirst($order->status) ?? '' }}
                                        </td>
                                        <td>
                                            @if (intval(\Carbon\Carbon::now()->diff($order->created_at)->format('%H')) > 1)
                                            Plus d'une heure 
                                            @else 
                                                {{\Carbon\Carbon::now()->diff($order->created_at)->format('%I:%S')}} s
                                            @endif
                                        </td>
                                        <td>
                                            {{ ucfirst($order->status) ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->ref ?? '' }}
                                        </td>
                                        <td>
                                            {{ \App\Models\Region::where('id',\App\Models\Client::where('id',$order->client_id)->pluck('region_id')->first())->pluck('regions')->first()?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->client->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $order->total ?? '' }} DH
                                        </td>
                                        <td style="display:none">
                                            @foreach (\App\Models\Orderdetail::where('order_id',$order->id)->get() as $o)
                                                <img src="{{$o->image}}" width="30px" />
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('order_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.orders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Order:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection
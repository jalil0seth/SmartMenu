@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/livreur/livraison") ? "active nav-link" : "nav-link " }}" id="custom-tabs-one-messages-tab" href="/admin/orders/livreur/livraison" >En cours de livraison <span class="badge badge-primary" style="background-color:rgb(246, 151, 74) !important">{{$enliv}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/livreur/Livré") ? "active nav-link" : "nav-link " }}"  href="/admin/orders/livreur/Livré" >Livrés <span class="badge badge-primary" style="background-color:rgb(81, 121, 104) !important">{{$liv}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="{{ request()->is("admin/orders/livreur/Annulée") ? "active nav-link" : "nav-link " }}"  href="/admin/orders/livreur/Annulée">Annulées <span class="badge badge-primary" style="background-color:#f00 !important">{{$annulle}}</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10">

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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key => $order)
                                    <tr data-entry-id="{{ $order->id }}" >
                                        <td>
                                            <a class="btn btn-xs btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                                {{ $order->ref ?? '' }}
                                            </a> 
                                        </td>
                                        <td>
                                            @can('Livreur')
                                                <a class="btn btn-xs btn-warning" href="{{ route('admin.orders.show', $order->id) }}">
                                                @if (intval(\Carbon\Carbon::now()->diff($order->created_at)->format('%H')) > 1)
                                                > 1h
                                                @else 
                                                    {{\Carbon\Carbon::now()->diff($order->created_at)->format('%I:%S')}} s
                                                @endif
                                                </a>
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.orders.show', $order->id) }}">
                                                {{ \App\Models\Region::where('id',\App\Models\Client::where('id',$order->client_id)->pluck('region_id')->first())->pluck('regions')->first()?? '' }}
                                                </a>
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.orders.show', $order->id) }}">
                                                    {{ $order->total }} DH
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
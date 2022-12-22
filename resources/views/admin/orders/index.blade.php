@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="{{ request()->is('admin/orders/filter/nouveau') ? 'active nav-link' : 'nav-link ' }}"
                                    id="custom-tabs-one-home-tab" href="/admin/orders/filter/nouveau">Nouvelle commandes
                                    <span class="badge badge-primary"
                                        style="background-color:rgb(42, 138, 255) !important">{{ $new }}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('admin/orders/filter/preparation') ? 'active nav-link' : 'nav-link ' }}"
                                    id="custom-tabs-one-profile-tab" href="/admin/orders/filter/preparation">En cours de
                                    préparation <span class="badge badge-primary"
                                        style="background-color:rgb(124, 177, 155) !important">{{ $prep }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('admin/orders/filter/livraison') ? 'active nav-link' : 'nav-link ' }}"
                                    id="custom-tabs-one-messages-tab" href="/admin/orders/filter/livraison">En cours de
                                    livraison <span class="badge badge-primary"
                                        style="background-color:rgb(246, 151, 74) !important">{{ $enliv }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('admin/orders/filter/Livré') ? 'active nav-link' : 'nav-link ' }}"
                                    href="/admin/orders/filter/Livré">Livrés <span class="badge badge-primary"
                                        style="background-color:rgb(81, 121, 104) !important">{{ $liv }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="{{ request()->is('admin/orders/filter/Annulée') ? 'active nav-link' : 'nav-link ' }}"
                                    href="/admin/orders/filter/Annulée">Annulées <span class="badge badge-primary"
                                        style="background-color:#f00 !important">{{ $annulle }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%">
                                            Référence
                                        </th>
                                        <th width="90%">
                                            Informations
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($date_orders as $key => $date_order)
                                        @if (\Carbon\Carbon::now()->format('d-m-Y') == $date_order)
                                            <tr style="background-color: #d1527e;;color:#fff">
                                                <td colspan="3">Aujourd'hui : <b>{{ $date_order }}</b></td>
                                            @else
                                            <tr style="background-color: #394860;color:#fff">
                                                <td colspan="3"><b>{{ $date_order }}</b></td>
                                        @endif
                                        </tr>
                                        @foreach ($orders as $key => $order)
                                            @if ($date_order == $order->created_at->format('d-m-Y'))
                                                <tr data-entry-id="{{ $order->id }}">
                                                    <td>
                                                        <a class="btn btn-xs btn-primary"
                                                            href="{{ route('admin.orders.show', $order->id) }}">
                                                            {{ $order->ref ?? '' }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.orders.show', $order->id) }}">
                                                            @if ($order->livreur_id != '' and isset(\App\Models\Livreur::find($order->livreur_id)->photo))
                                                                <img src="{{ \App\Models\Livreur::find($order->livreur_id)->photo->getUrl('thumb') }}"
                                                                    class="img-circle elevation-2" width="40px"
                                                                    srcset="">
                                                            @else
                                                                <img src="{{ asset('noimg.jpeg') }}" width="40px"
                                                                    class="img-circle elevation-2" srcset="">
                                                            @endif
                                                        </a>
                                                        <a class="btn btn-xs btn-info"
                                                            href="{{ route('admin.orders.show', $order->id) }}">
                                                            {{ $order->created_at->format('H:i') }}
                                                        </a>
                                                        @if (intval(
                                                            \Carbon\Carbon::now()->diff($order->created_at)->format('%H')) >
                                                            1 or
                                                            intval(
                                                                \Carbon\Carbon::now()->diff($order->created_at)->format('%D')) >=
                                                                1)
                                                            <a class="btn btn-xs btn-warning"
                                                                href="{{ route('admin.orders.show', $order->id) }}">
                                                                > 1h
                                                            </a>
                                                        @else
                                                            <a class="btn btn-xs btn-success"
                                                                href="{{ route('admin.orders.show', $order->id) }}">
                                                                {{ \Carbon\Carbon::now()->diff($order->created_at)->format('%Im:%Ss') }}
                                                            </a>
                                                        @endif


                                                        <a class="btn btn-xs btn-info"
                                                            href="{{ route('admin.orders.show', $order->id) }}">
                                                            {{ $order->total }} DH
                                                        </a>
                                                        <a class="btn btn-xs btn-info"
                                                            href="{{ route('admin.orders.show', $order->id) }}">
                                                            {{ \App\Models\Region::where('id',\App\Models\Client::where('id', $order->client_id)->pluck('region_id')->first())->pluck('regions')->first() ?? '' }}
                                                        </a>
                                                        @if ($status == 'nouveau')
                                                            |
                                                            @can('category_delete')
                                                                <form action="{{ route('admin.orders.destroy', $order->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                                    style="display: inline-block;">
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <input type="submit" class="btn btn-xs btn-danger"
                                                                        value="{{ trans('global.delete') }}">
                                                                </form>
                                                            @endcan
                                                        @endif


                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                            <input type="hidden" id='notif' value="{{ asset('notif.mp3') }}">
                            <input type="hidden" id='last_order' value="{{ $last_order }}">
                            <audio title="audio2" id="audio2" src="{{ asset('notif.mp3') }}" autoplay="true"
                                muted="muted"></audio>
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('order_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.orders.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Order:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            let visibleColumnsIndexes = null;
            $('.datatable thead').on('input', '.search', function() {
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


        $(document).ready(function() {
            function play_notif() {
                $("#audio2").prop('muted', false);
                $('#audio2').get(0).play();
            }
            play_notif();

            sendRequest();

            function sendRequest() {
                $.ajax({
                    headers: {
                        'x-csrf-token': _token
                    },
                    url: "/last_order",
                    success: function(data) {
                        if (data['last_order'] != $('#last_order').val()) {
                            play_notif();
                            console.log('yes');
                            window.setTimeout(function() {
                                window.location.reload();
                            }, 6 * 1000);
                        }
                    },
                    complete: function() {
                        // Schedule the next request when the current one's complete
                        setInterval(sendRequest, 8000); // The interval set to 5 seconds
                    }
                });
            };
        });
    </script>
@endsection

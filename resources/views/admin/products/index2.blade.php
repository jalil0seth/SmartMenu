@extends('layouts.admin')
@section('content')
    <div class="content">
        @can('category_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-md-12">
                    <a class="btn btn-success" href="{{ route('admin.products.create') }}">
                        {{ trans('global.add') }} Produit
                    </a>
                </div>
            </div>
        @endcan

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-product">
                                <thead>
                                    <tr>
                                        <th width="10" style="display: none">
                                            {{ trans('cruds.product.fields.id') }}
                                        </th>
                                        <th>
                                            Produit
                                        </th>
                                        <th>
                                            Categorie
                                        </th>                                   
                                        <th>
                                            Prix
                                         </th>
                                        <th>
                                            Position
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($categories as $category)
                                    <tbody data-id="{{ $category->id }}" class="sortable">
                                            @if ($category->image != '')
                                                <tr style="background-image: url('{{ $category->image->getUrl() }}');height:140px;background-size: cover;">
                                            @else
                                            <tr style="background-color: #fff;height:120px">
                                            @endif
                                            <td colspan="8">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <i class="icon-drag-handle"></i>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                @can('category_edit')
                                                                    <a class="button secondary icon-edit align-right"
                                                                        href="{{ route('admin.categories.edit', $category->id) }}"></a>
                                                                @endcan
                                                            </div>
                                                            <div class="col-md-11">
                                                                <i class="far fa-bookmark"></i>
                                                                <span style="color: #fff; background-color: rgb(52 66 88); padding: 4px"> <b>{{ $category->name }}</b> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @foreach (\App\Models\Product::where('category_id', $category->id)->orderBy('rank', 'asc')->get() as $product)
                                            <tr data-id="{{ $product->id }}" colspan="8" class="meal"
                                                style="border:solid 1px #d0494a69;" @if($product->oos == 1) id="oos" @endif>
                                                <td style="display: none">
                                                    {{ $product->id ?? '' }}
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        @if (isset($product->image[0]))
                                                            <img width="50px" src="{{ $product->image[0]['preview_url'] }}" class="img-circle elevation-2">
                                                        @else
                                                            <h1>{{ $product->name ?? '' }}</h1>
                                                        @endif
                                                        {{ $product->name ?? '' }} @if($product->oos == 1) <span class="float-right badge bg-danger">Non disponible</span> @endif
                                                    </div>

                                                </td>
                                                <td class="category-name">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <i class="icon-drag-handle"></i>
                                                        </div>
                                                        <div class="col-md-11">
                                                            {{ $product->category->name ?? '' }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="price">
                                                    {{ $product->price ?? '' }} DH
                                                </td>
                                                <td class="position">
                                                    {{ $product->rank ?? '' }}
                                                </td>
                                                <td>
                                                    @can('product_edit')
                                                    <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $product->id) }}">
                                                        {{ trans('global.edit') }}
                                                    </a>
                                                @endcan

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="empty-message"
                                            @if (\App\Models\Product::where('category_id', $category->id)->count()) style="display:none;" @endif>
                                            <td colspan="8" class="text-center">
                                                Il n'y a pas de produits dans cette categorie
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="8">
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
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
        function sendReorderMealsRequest($category) {
            var items = $category.sortable('toArray', {
                attribute: 'data-id'
            });
            var ids = $.grep(items, (item) => item !== "");
            if ($category.find('tr.meal').length) {
                $category.find('.empty-message').hide();
            }
            $category.find('.category-name').text($category.find('tr:first td span').text());
            $.post('{{ route('admin.products.reorder') }}', {
                    _token,
                    ids,
                    category_id: $category.data('id')
                })
                .done(function(response) {
                    $category.children('tr.meal').each(function(index, meal) {
                        $(meal).children('.position').text(response.positions[$(meal).data('id')])
                    });
                })
                .fail(function(response) {
                    //console.log(response);
                    alert('Error occured while sending reorder request');
                    location.reload();
                });
        }
        $(document).ready(function() {
            var $categories = $('table');
            var $products = $('.sortable');
            $categories.sortable({
                cancel: 'thead',
                stop: () => {
                    var items = $categories.sortable('toArray', {
                        attribute: 'data-id'
                    });
                    var ids = $.grep(items, (item) => item !== "");
                    $.post('{{ route('admin.categories.reorder') }}', {
                            _token,
                            ids
                        })
                        .fail(function(response) {
                            alert('Error occured while sending reorder request');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          nhjjh888778877777location.reload();
                        });
                }
            });
            $products.sortable({
                connectWith: '.sortable',
                items: 'tr.meal',
                stop: (event, ui) => {
                    sendReorderMealsRequest($(ui.item).parent());
                    if ($(event.target).data('id') != $(ui.item).parent().data('id')) {
                        if ($(event.target).find('tr.meal').length) {
                            sendReorderMealsRequest($(event.target));
                        } else {
                            $(event.target).find('.empty-message').show();
                        }
                    }
                }
            });
            $('table, .sortable').disableSelection();
        });
    </script>
@endsection

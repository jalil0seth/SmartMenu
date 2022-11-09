@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.orderdetail.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.orderdetails.update", [$orderdetail->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('total') ? 'has-error' : '' }}">
                            <label for="total">{{ trans('cruds.orderdetail.fields.total') }}</label>
                            <input class="form-control" type="number" name="total" id="total" value="{{ old('total', $orderdetail->total) }}" step="1">
                            @if($errors->has('total'))
                                <span class="help-block" role="alert">{{ $errors->first('total') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.orderdetail.fields.total_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                            <label for="quantity">{{ trans('cruds.orderdetail.fields.quantity') }}</label>
                            <input class="form-control" type="number" name="quantity" id="quantity" value="{{ old('quantity', $orderdetail->quantity) }}" step="1">
                            @if($errors->has('quantity'))
                                <span class="help-block" role="alert">{{ $errors->first('quantity') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.orderdetail.fields.quantity_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('product') ? 'has-error' : '' }}">
                            <label for="product_id">{{ trans('cruds.orderdetail.fields.product') }}</label>
                            <select class="form-control select2" name="product_id" id="product_id">
                                @foreach($products as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('product_id') ? old('product_id') : $orderdetail->product->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('product'))
                                <span class="help-block" role="alert">{{ $errors->first('product') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.orderdetail.fields.product_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('order') ? 'has-error' : '' }}">
                            <label for="order_id">{{ trans('cruds.orderdetail.fields.order') }}</label>
                            <select class="form-control select2" name="order_id" id="order_id">
                                @foreach($orders as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('order_id') ? old('order_id') : $orderdetail->order->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('order'))
                                <span class="help-block" role="alert">{{ $errors->first('order') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.orderdetail.fields.order_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('discount') ? 'has-error' : '' }}">
                            <label for="discount">{{ trans('cruds.orderdetail.fields.discount') }}</label>
                            <input class="form-control" type="number" name="discount" id="discount" value="{{ old('discount', $orderdetail->discount) }}" step="1">
                            @if($errors->has('discount'))
                                <span class="help-block" role="alert">{{ $errors->first('discount') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.orderdetail.fields.discount_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
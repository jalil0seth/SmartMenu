@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.order.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.orders.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('client') ? 'has-error' : '' }}">
                            <label for="client_id">{{ trans('cruds.order.fields.client') }}</label>
                            <select class="form-control select2" name="client_id" id="client_id">
                                @foreach($clients as $id => $entry)
                                    <option value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client'))
                                <span class="help-block" role="alert">{{ $errors->first('client') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.client_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('total') ? 'has-error' : '' }}">
                            <label for="total">{{ trans('cruds.order.fields.total') }}</label>
                            <input class="form-control" type="number" name="total" id="total" value="{{ old('total', '') }}" step="1">
                            @if($errors->has('total'))
                                <span class="help-block" role="alert">{{ $errors->first('total') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.total_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('livraison') ? 'has-error' : '' }}">
                            <label for="livraison">{{ trans('cruds.order.fields.livraison') }}</label>
                            <input class="form-control" type="text" name="livraison" id="livraison" value="{{ old('livraison', '') }}">
                            @if($errors->has('livraison'))
                                <span class="help-block" role="alert">{{ $errors->first('livraison') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.order.fields.livraison_helper') }}</span>
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
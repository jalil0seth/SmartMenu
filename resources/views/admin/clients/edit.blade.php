@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.clients.update", [$client->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('cruds.client.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $client->name) }}">
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                            <label for="adresse">{{ trans('cruds.client.fields.adresse') }}</label>
                            <textarea class="form-control" name="adresse" id="adresse">{{ old('adresse', $client->adresse) }}</textarea>
                            @if($errors->has('adresse'))
                                <span class="help-block" role="alert">{{ $errors->first('adresse') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.adresse_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $client->phone) }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('region') ? 'has-error' : '' }}">
                            <label for="region_id">{{ trans('cruds.client.fields.region') }}</label>
                            <select class="form-control select2" name="region_id" id="region_id">
                                @foreach($regions as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('region_id') ? old('region_id') : $client->region->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('region'))
                                <span class="help-block" role="alert">{{ $errors->first('region') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.region_helper') }}</span>
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
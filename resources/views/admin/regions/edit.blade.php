@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.region.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.regions.update", [$region->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('ville') ? 'has-error' : '' }}" style="display: none">
                            <label for="ville">{{ trans('cruds.region.fields.ville') }}</label>
                            <input class="form-control" type="text" name="ville" id="ville" value="{{ old('ville', $region->ville) }}">
                            @if($errors->has('ville'))
                                <span class="help-block" role="alert">{{ $errors->first('ville') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.region.fields.ville_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('regions') ? 'has-error' : '' }}">
                            <label for="regions">Region</label>
                            <input class="form-control" type="text" name="regions" id="regions" value="{{ old('regions', $region->regions) }}">
                            @if($errors->has('regions'))
                                <span class="help-block" role="alert">{{ $errors->first('regions') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.region.fields.regions_helper') }}</span>
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
@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.region.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.regions.store") }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="Marrakech" name="ville">
                        <div class="form-group {{ $errors->has('regions') ? 'has-error' : '' }}">
                            <label for="regions">Region</label>
                            <input class="form-control" type="text" name="regions" id="regions" value="{{ old('regions', '') }}">
                            @if($errors->has('regions'))
                                <span class="help-block" role="alert">{{ $errors->first('regions') }}</span>
                            @endif
                            <span class="help-block"></span>
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
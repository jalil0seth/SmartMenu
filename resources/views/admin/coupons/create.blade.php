@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.coupon.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.coupons.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                            <label class="required" for="code">{{ trans('cruds.coupon.fields.code') }}</label>
                            <input class="form-control" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                            @if($errors->has('code'))
                                <span class="help-block" role="alert">{{ $errors->first('code') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.coupon.fields.code_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                            <label class="required" for="percentage">{{ trans('cruds.coupon.fields.percentage') }}</label>
                            <input class="form-control" type="number" name="percentage" id="percentage" value="{{ old('percentage', '') }}" step="1" required>
                            @if($errors->has('percentage'))
                                <span class="help-block" role="alert">{{ $errors->first('percentage') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.coupon.fields.percentage_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('valid') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="valid" value="0">
                                <input type="checkbox" name="valid" id="valid" value="1" {{ old('valid', 0) == 1 || old('valid') === null ? 'checked' : '' }}>
                                <label for="valid" style="font-weight: 400">{{ trans('cruds.coupon.fields.valid') }}</label>
                            </div>
                            @if($errors->has('valid'))
                                <span class="help-block" role="alert">{{ $errors->first('valid') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.coupon.fields.valid_helper') }}</span>
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
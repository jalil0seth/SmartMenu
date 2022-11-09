@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.setting.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $setting->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.nom') }}
                                    </th>
                                    <td>
                                        {{ $setting->nom }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($setting->logo)
                                            <a href="{{ $setting->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $setting->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.banners') }}
                                    </th>
                                    <td>
                                        @foreach($setting->banners as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $media->getUrl('thumb') }}">
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.free_shipping') }}
                                    </th>
                                    <td>
                                        {{ $setting->free_shipping }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.min_order') }}
                                    </th>
                                    <td>
                                        {{ $setting->min_order }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $setting->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.start_time') }}
                                    </th>
                                    <td>
                                        {{ $setting->start_time }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.end_time') }}
                                    </th>
                                    <td>
                                        {{ $setting->end_time }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.adresse') }}
                                    </th>
                                    <td>
                                        {{ $setting->adresse }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.setting.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $setting->phone }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.settings.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
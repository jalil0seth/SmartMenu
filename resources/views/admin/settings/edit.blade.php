@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.settings.update", [$setting->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                            <label for="nom">{{ trans('cruds.setting.fields.nom') }}</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ old('nom', $setting->nom) }}">
                            @if($errors->has('nom'))
                                <span class="help-block" role="alert">{{ $errors->first('nom') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.nom_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                            <label for="logo">{{ trans('cruds.setting.fields.logo') }}</label>
                            <div class="needsclick dropzone" id="logo-dropzone">
                            </div>
                            @if($errors->has('logo'))
                                <span class="help-block" role="alert">{{ $errors->first('logo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.logo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('banners') ? 'has-error' : '' }}">
                            <label for="banners">{{ trans('cruds.setting.fields.banners') }}</label>
                            <div class="needsclick dropzone" id="banners-dropzone">
                            </div>
                            @if($errors->has('banners'))
                                <span class="help-block" role="alert">{{ $errors->first('banners') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.banners_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('free_shipping') ? 'has-error' : '' }}">
                            <label for="free_shipping">{{ trans('cruds.setting.fields.free_shipping') }}</label>
                            <input class="form-control" type="number" name="free_shipping" id="free_shipping" value="{{ old('free_shipping', $setting->free_shipping) }}" step="1">
                            @if($errors->has('free_shipping'))
                                <span class="help-block" role="alert">{{ $errors->first('free_shipping') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.free_shipping_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('min_order') ? 'has-error' : '' }}">
                            <label for="min_order">{{ trans('cruds.setting.fields.min_order') }}</label>
                            <input class="form-control" type="number" name="min_order" id="min_order" value="{{ old('min_order', $setting->min_order) }}" step="1">
                            @if($errors->has('min_order'))
                                <span class="help-block" role="alert">{{ $errors->first('min_order') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.min_order_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('shipping') ? 'has-error' : '' }}">
                            <label for="shipping">Prix de livraison</label>
                            <input class="form-control" type="number" name="shipping" id="shipping" value="{{ old('shipping', $setting->shipping) }}" step="1">
                            @if($errors->has('shipping'))
                                <span class="help-block" role="alert">{{ $errors->first('shipping') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $setting->email) }}">
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
                            <label for="instagram">Instagram</label>
                            <input class="form-control" type="instagram" name="instagram" id="instagram" value="{{ old('instagram', $setting->instagram) }}">
                            @if($errors->has('instagram'))
                                <span class="help-block" role="alert">{{ $errors->first('instagram') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group {{ $errors->has('tiktok') ? 'has-error' : '' }}">
                            <label for="tiktok">TikTok</label>
                            <input class="form-control" type="tiktok" name="tiktok" id="tiktok" value="{{ old('tiktok', $setting->tiktok) }}">
                            @if($errors->has('tiktok'))
                                <span class="help-block" role="alert">{{ $errors->first('tiktok') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group {{ $errors->has('whatsapp') ? 'has-error' : '' }}">
                            <label for="whatsapp">Whatsapp</label>
                            <input class="form-control" type="whatsapp" name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $setting->whatsapp) }}">
                            @if($errors->has('whatsapp'))
                                <span class="help-block" role="alert">{{ $errors->first('whatsapp') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                            <label for="facebook">Facebook</label>
                            <input class="form-control" type="facebook" name="facebook" id="facebook" value="{{ old('facebook', $setting->facebook) }}">
                            @if($errors->has('facebook'))
                                <span class="help-block" role="alert">{{ $errors->first('facebook') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                            <label for="start_time">{{ trans('cruds.setting.fields.start_time') }}</label>
                            <input class="form-control timepicker" type="text" name="start_time" id="start_time" value="{{ old('start_time', $setting->start_time) }}">
                            @if($errors->has('start_time'))
                                <span class="help-block" role="alert">{{ $errors->first('start_time') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.start_time_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('end_time') ? 'has-error' : '' }}">
                            <label for="end_time">{{ trans('cruds.setting.fields.end_time') }}</label>
                            <input class="form-control timepicker" type="text" name="end_time" id="end_time" value="{{ old('end_time', $setting->end_time) }}">
                            @if($errors->has('end_time'))
                                <span class="help-block" role="alert">{{ $errors->first('end_time') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.end_time_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
                            <label for="adresse">{{ trans('cruds.setting.fields.adresse') }}</label>
                            <textarea class="form-control" name="adresse" id="adresse">{{ old('adresse', $setting->adresse) }}</textarea>
                            @if($errors->has('adresse'))
                                <span class="help-block" role="alert">{{ $errors->first('adresse') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.adresse_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.setting.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $setting->phone) }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.setting.fields.phone_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($setting) && $setting->logo)
      var file = {!! json_encode($setting->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    var uploadedBannersMap = {}
Dropzone.options.bannersDropzone = {
    url: '{{ route('admin.settings.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="banners[]" value="' + response.name + '">')
      uploadedBannersMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedBannersMap[file.name]
      }
      $('form').find('input[name="banners[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($setting) && $setting->banners)
      var files = {!! json_encode($setting->banners) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="banners[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
@endsection
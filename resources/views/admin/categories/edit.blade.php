@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.categories.update", [$category->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.category.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.category.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                            <textarea class="form-control ckeditor" name="description" id="description">{!! old('description', $category->description) !!}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" id="is_active" value="1" {{ $category->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                                <label for="is_active" style="font-weight: 400">{{ trans('cruds.category.fields.is_active') }}</label>
                            </div>
                            @if($errors->has('is_active'))
                                <span class="help-block" role="alert">{{ $errors->first('is_active') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.category.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('in_homepage') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="in_homepage" value="0">
                                <input type="checkbox" name="in_homepage" id="in_homepage" value="1" {{ $category->in_homepage || old('in_homepage', 0) === 1 ? 'checked' : '' }}>
                                <label for="in_homepage" style="font-weight: 400">{{ trans('cruds.category.fields.in_homepage') }}</label>
                            </div>
                            @if($errors->has('in_homepage'))
                                <span class="help-block" role="alert">{{ $errors->first('in_homepage') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.category.fields.in_homepage_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <label for="image">{{ trans('cruds.category.fields.image') }}</label>
                            <img src="{{$category->image->getUrl() }}" width="100%" />
                            <hr>
                            <div class="needsclick dropzone" id="image-dropzone">
                            </div>
                            @if($errors->has('image'))
                                <span class="help-block" role="alert">{{ $errors->first('image') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.category.fields.image_helper') }}</span>
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
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.categories.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
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
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($category) && $category->image)
      var file = {!! json_encode($category->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.products.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $product->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>
@endsection
@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.products.update", [$product->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">Nom</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.name_helper') }}</span>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group {{ $errors->has('name_ar') ? 'has-error' : '' }}">
                            <label for="name_ar">Nom (AR)</label>
                            <input class="form-control" type="text" @if($host == 'toptopdonuts.ma') @else name="name_ar" @endif  id="name_ar" value="{{ old('name_ar', $product->name_ar) }}">
                            @if($errors->has('name_ar'))
                                <span class="help-block" role="alert">{{ $errors->first('name_ar') }}</span>
                            @endif
                            <span class="help-block"></span>
                        </div>
                        </div>
                      </div>
                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <label for="image">{{ trans('cruds.product.fields.image') }}</label>
                            <div class="needsclick dropzone" id="image-dropzone" required>
                            </div>
                            @if($errors->has('image'))
                                <span class="help-block" role="alert">{{ $errors->first('image') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.image_helper') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                          <div @if ($product->oos == 1) id="oos" @endif>
                              <input type="hidden" name="oos" value="0">
                              <label for="oos" style="font-weight: 400">Mettre le produit ( Non disponible )</label>
                              <input type="checkbox" name="oos" id="oos" value="1" {{ $product->oos || old('oos', 0) === 1 ? 'checked' : '' }}>
                          </div>
                          @if($errors->has('oos'))
                              <span class="help-block" role="alert">{{ $errors->first('is_active') }}</span>
                          @endif
                        </div>

                        <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                            <label for="price">{{ trans('cruds.product.fields.price') }}</label>
                            <input class="form-control" type="number" name="price" id="price" value="{{ old('price', $product->price) }}" step="1" min="2">
                            @if($errors->has('price'))
                                <span class="help-block" role="alert">{{ $errors->first('price') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.price_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('old_price') ? 'has-error' : '' }}">
                            <label for="old_price">{{ trans('cruds.product.fields.old_price') }}</label>
                            <input class="form-control" type="number" name="old_price" id="old_price" value="{{ old('old_price', $product->old_price) }}" step="1">
                            @if($errors->has('old_price'))
                                <span class="help-block" role="alert">{{ $errors->first('old_price') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.old_price_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label for="category_id">{{ trans('cruds.product.fields.category') }}</label>
                            <select class="form-control select2" name="category_id" id="category_id">
                                @foreach($categories as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $product->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <span class="help-block" role="alert">{{ $errors->first('category') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.category_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.product.fields.description') }}</label>
                            <textarea class="form-control ckeditor" name="description" id="description">{!! old('description', $product->description) !!}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
                            <label for="notes">{{ trans('cruds.product.fields.notes') }}</label>
                            <textarea class="form-control" name="notes" id="notes">{{ old('notes', $product->notes) }}</textarea>
                            @if($errors->has('notes'))
                                <span class="help-block" role="alert">{{ $errors->first('notes') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.product.fields.notes_helper') }}</span>
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
    var uploadedImageMap = {}
Dropzone.options.imageDropzone = {
    url: '{{ route('admin.products.storeMedia') }}',
    maxFilesize: 6, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 6,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="image[]" value="' + response.name + '">')
      uploadedImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedImageMap[file.name]
      }
      $('form').find('input[name="image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($product) && $product->image)
      var files = {!! json_encode($product->image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="image[]" value="' + file.file_name + '">')
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
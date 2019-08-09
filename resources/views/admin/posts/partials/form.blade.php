{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('category_id', 'Categorias') }}</a>
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('name', 'Título del Post') }}</a>
  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('slug', 'URL amigable') }}</a>
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('file', 'Imagen') }}</a><br>
  {{ Form::file('file') }}
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('status', 'Estado') }}</a> <br>
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Publicado
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Borrador
  </label>
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('tags', 'Etiquetas') }}</a>
  <div>
    @foreach ($tags as $tag)
        <label>
          {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
        </label>
    @endforeach
  </div>
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('excerpt', 'Extracto') }}</a>
  {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
<a style="font-weight:bold">{{ Form::label('body', 'Descripción') }}</a>
  {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary', 'style' => "font-size:20px"]) }}
</div>

@push('scripts')
  <script src="/vendor/stringToSlug/jquery.stringToSlug.min.js"></script>
  <script src="/vendor/ckeditor/ckeditor.js"></script>
  <script>
    $(document).ready( function() {
      $("#name, #slug").stringToSlug({
        callback: function(text){
          $('#slug').val(text);
        }
      });
    });

    CKEDITOR.config.height = 400;
    CKEDITOR.config.width = 'auto';

    CKEDITOR.replace('body');


  </script>
@endpush
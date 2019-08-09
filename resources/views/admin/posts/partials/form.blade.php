{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('category_id', 'Categorias') }}
=======
<a style="font-weight:bold">{{ Form::label('category_id', 'Categorias') }}</a>
>>>>>>> cambios SATH
  {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('name', 'Nombre de la etiqueta') }}
=======
<a style="font-weight:bold">{{ Form::label('name', 'Título del Post') }}</a>
>>>>>>> cambios SATH
  {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('slug', 'URL amigable') }}
=======
<a style="font-weight:bold">{{ Form::label('slug', 'URL amigable') }}</a>
>>>>>>> cambios SATH
  {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('file', 'Imagen') }}
=======
<a style="font-weight:bold">{{ Form::label('file', 'Imagen') }}</a><br>
>>>>>>> cambios SATH
  {{ Form::file('file') }}
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('status', 'Estado') }}
=======
<a style="font-weight:bold">{{ Form::label('status', 'Estado') }}</a> <br>
>>>>>>> cambios SATH
  <label>
    {{ Form::radio('status', 'PUBLISHED') }} Publicado
  </label>
  <label>
    {{ Form::radio('status', 'DRAFT') }} Borrador
  </label>
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('tags', 'Etiquetas') }}
=======
<a style="font-weight:bold">{{ Form::label('tags', 'Etiquetas') }}</a>
>>>>>>> cambios SATH
  <div>
    @foreach ($tags as $tag)
        <label>
          {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
        </label>
    @endforeach
  </div>
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('excerpt', 'Extracto') }}
=======
<a style="font-weight:bold">{{ Form::label('excerpt', 'Extracto') }}</a>
>>>>>>> cambios SATH
  {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
<<<<<<< HEAD
  {{ Form::label('body', 'Descripción') }}
=======
<a style="font-weight:bold">{{ Form::label('body', 'Descripción') }}</a>
>>>>>>> cambios SATH
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
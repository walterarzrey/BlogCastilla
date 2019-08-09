@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Ver Post
              </h4>
              <hr>
            </div>
          <div class="card-body" style="font-size:20px; margin-top:-30px">
            <p ><strong>Nombre </strong>{{ $post->name }}</p>
            <p><strong>Etiqueta </strong>{{ $post->slug }}</p>
            <p><strong>Contenido </strong>{{ $post->body }}</p>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
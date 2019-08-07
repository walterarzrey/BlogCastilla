@extends('layouts.app')

@section('content')
    <div class="container"  style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Ver Entrada
              </h4>
              <hr style="border-width: 2px">
            </div>
          <div class="card-body" style="font-size:20px">
            <p ><strong>Nombre </strong>{{ $post->name }}</p>
            <p><strong>Slug </strong>{{ $post->slug }}</p>
            <p><strong>Contenido </strong>{{ $post->body }}</p>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
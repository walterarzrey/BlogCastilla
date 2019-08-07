@extends('layouts.app')

@section('content')
    <div class="container" style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Ver Categoria
              </h4>
              <hr style="border-width: 2px">
            </div>
          <div class="card-body">
            <p style="font-size:20px"><strong>Nombre </strong>{{ $category->name }}</p>
            <p style="font-size:20px"><strong>Slug </strong>{{ $category->slug }}</p>
            <p style="font-size:20px"><strong>Contenido </strong>{{ $category->body }}</p>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
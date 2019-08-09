@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container" style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
=======
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-4">
>>>>>>> cambios SATH
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Ver Categoria
              </h4>
<<<<<<< HEAD
              <hr style="border-width: 2px">
            </div>
          <div class="card-body">
            <p style="font-size:20px"><strong>Nombre </strong>{{ $category->name }}</p>
            <p style="font-size:20px"><strong>Slug </strong>{{ $category->slug }}</p>
=======
              <hr>
            </div>
          <div class="card-body" style="margin-top:-30px">
            <p style="font-size:20px"><strong>Nombre </strong>{{ $category->name }}</p>
            <p style="font-size:20px"><strong>URL Amigable </strong>{{ $category->slug }}</p>
>>>>>>> cambios SATH
            <p style="font-size:20px"><strong>Contenido </strong>{{ $category->body }}</p>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container" style="background-color:whitesmoke">
=======
    <div class="container">
>>>>>>> cambios SATH
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Ver Etiqueta
              </h4>
              <hr style="border-width: 2px">
            </div>
<<<<<<< HEAD
          <div class="card-body">
            <p style="font-size:20px"><strong>Nombre </strong>{{ $tag->name }}</p>
            <p style="font-size:20px"><strong>Slug </strong>{{ $tag->slug }}</p>
=======
          <div class="card-body" style="margin-top:-30px">
            <p style="font-size:20px"><strong>Nombre </strong>{{ $tag->name }}</p>
            <p style="font-size:20px"><strong>URL Amigable </strong>{{ $tag->slug }}</p>
>>>>>>> cambios SATH
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
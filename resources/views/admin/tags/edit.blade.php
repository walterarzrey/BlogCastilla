@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container"  style="background-color:whitesmoke">
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
                Editar Etiqueta
              </h4>
              <hr style="border-width: 2px">
            </div>
<<<<<<< HEAD
          <div class="card-body" style="font-size:20px">
=======
          <div class="card-body" style="font-size:20px; margin-top:-30px">
>>>>>>> cambios SATH
              {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT' ]) !!}
                @include('admin.tags.partials.form')
              {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
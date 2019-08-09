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
                Editar Categoria
              </h4>
              <hr style="border-width: 2px">
            </div>
<<<<<<< HEAD
          <div class="card-body" style="font-size:20px">
=======
          <div class="card-body" style="font-size:20px; margin-top:-30px">
>>>>>>> cambios SATH
              {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT' ]) !!}
                @include('admin.categories.partials.form')
              {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container" style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Crear Etiqueta
              </h4>
              <hr style="border-width: 2px">
            </div>
          <div class="card-body"  style="font-size:20px">
              {!! Form::open(['route' => 'tags.store']) !!}
                @include('admin.tags.partials.form')
              {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
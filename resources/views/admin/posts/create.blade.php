@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Crear Post
              </h4>
              <hr>
            </div>
          <div class="card-body" style="margin-top:-30px">
              {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                @include('admin.posts.partials.form')
              {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
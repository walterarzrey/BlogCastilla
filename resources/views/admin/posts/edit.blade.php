@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Editar Post
              </h4>
              <hr style="border-width: 2px">
            </div>
          <div class="card-body" style="font-size:20px; margin-top:-30px">
              {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true ]) !!}
                @include('admin.posts.partials.form')
              {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
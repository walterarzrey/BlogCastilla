@extends('layouts.app')

@section('content')
    <div class="container" style="background-color:whitesmoke">
      <h1 style="padding-left:14px; font-size:40px">Lista de Artículos</h1>
      <hr style="border-width: 2px">
      <div class="col-md-12 col-md-offset-2">


        @foreach ($posts as $post)
        <div class="card mb-3">
          @if ($post->file)
            <img src="{{ $post->file }}" class="img-responsive card-img-top" alt="{{ $post->name }}">
          @endif
          <div class="card-body">
            <h4 class="card-title">{{ $post->name }}</h4>
            <p class="card-text" style="font-size:20px">
              {{ $post->excerpt }}
            </p>
            <a href="{{ route('post', $post->slug) }}" class="d-flex justify-content-end">Leer más</a>
          </div>
        </div>
        @endforeach
        {{ $posts->render() }}
      </div>
    </div>
@endsection
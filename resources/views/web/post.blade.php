@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container" style="background-color:whitesmoke">
=======
    <div class="container">
>>>>>>> cambios SATH
      <h1 style="padding-left:14px; font-size:40px">{{ $post->name }}</h1>
      <hr style="border-width: 2px">
      <div class="col-md-12 col-md-offset-2">


<<<<<<< HEAD
        <div class="card mb-3">
=======
        <div class="card mb-4">
>>>>>>> cambios SATH
          @if ($post->file)
            <img src="{{ $post->file }}" class="img-responsive card-img-top" alt="{{ $post->name }}">
          @endif
          <div class="card-body">
<<<<<<< HEAD
            <h4 class="card-title">
              Categoría
              <a style="font-size:20px" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
            </h4>
            <p class="card-text" style="font-size:20px">
              {{ $post->excerpt }}
            </p>
            <hr>
            {!! $post->body !!}
            <hr>
            Etiquetas
            @foreach ($post->tags as $tag)
                <a style="font-size:20px" href="{{ route('tag', $tag->slug) }}">
=======
            <h4 class="card-title" style="font-weight:bold">
              Categoría
              <a style="font-size:20px" href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
            </h4>
            <p class="card-text" style="font-size:20px; font-style:italic; opacity:0.8">
              {{ $post->excerpt }}
            </p>
            <hr>
            <a style="font-size:20px">
              {!! $post->body !!}
            </a>
            <hr>
            <a style="font-weight:bold">Etiquetas</a>
            @foreach ($post->tags as $tag)
                <a style="font-size:20px; font-weight:bold" href="{{ route('tag', $tag->slug) }}">
>>>>>>> cambios SATH
                  {{ $tag->name }}
                </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection
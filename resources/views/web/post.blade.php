@extends('layouts.app')

@section('content')
    <div class="container" style="background-color:whitesmoke">
      <h1 style="padding-left:14px; font-size:40px">{{ $post->name }}</h1>
      <hr style="border-width: 2px">
      <div class="col-md-12 col-md-offset-2">


        <div class="card mb-3">
          @if ($post->file)
            <img src="{{ $post->file }}" class="img-responsive card-img-top" alt="{{ $post->name }}">
          @endif
          <div class="card-body">
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
                  {{ $tag->name }}
                </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection
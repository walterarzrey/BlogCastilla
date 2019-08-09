@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 id="t1" style="padding-left:14px; font-size:40px; text-align:center">Noticias<span>&#160;</span></h1>
        <hr style="border-width: 2px; margin-top:-8px">
      <div class="col-md-8">


        @foreach ($posts as $post)
        <div class="card mb-4" id="p">

          @if ($post->file)
            <img src="{{ $post->file }}" class="img-responsive card-img-top"alt="{{ $post->name }}">
            @endif
          <div class="card-body">
            <h4 class="card-title" style="font-weight:bold">{{ $post->name }}</h4>
            <hr>
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
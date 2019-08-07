@extends('layouts.app')

@section('content')
    <div class="container"  style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Lista de Entradas
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right" style="font-size:20px">
                  Crear
                </a>
              </h4>
            </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                    <tr>
                      <td>{{ $post->id }}</td>
                      <td>{{ $post->name }}</td>
                      <td width="10px">
                      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-info">
                          ver
                        </a>
                      </td>
                      <td width="10px">
                          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-info">
                            editar
                          </a>
                      </td>
                      <td width="10px">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                          <button class="btn btn-sm btn-danger">
                            Eliminar
                          </button>
                        {!! Form::close() !!}
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            {{ $posts->render() }}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
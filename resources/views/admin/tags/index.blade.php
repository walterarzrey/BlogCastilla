@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container" style="background-color:whitesmoke">
      <div class="row">
        <div class="col-md-12 col-md-offset-2">      
          <div class="card mb-3">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Lista de Etiquetas
                <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right" style="font-size:20px">
=======
    <div class="container">
      <div class="row">
        <div class="col-md-8">      
          <div class="card mb-4">
            <div class="card-body">
              <h4 class="card-title" style="font-size:40px">
                Lista de Etiquetas
                <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right" style="font-size:20px; margin-top:5px">
>>>>>>> cambios SATH
                  Crear
                </a>
              </h4>
            </div>
          <div class="card-body">
<<<<<<< HEAD
            <table class="table table-striped table-hover">
=======
            <table class="table table-striped table-hover" style="font-size:15px">
>>>>>>> cambios SATH
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tags as $tag)
                    <tr>
                      <td>{{ $tag->id }}</td>
                      <td>{{ $tag->name }}</td>
                      <td width="10px">
                      <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-outline-info">
<<<<<<< HEAD
                          ver
                        </a>
                      </td>
                      <td width="10px">
                          <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-outline-info">
                            editar
                          </a>
                      </td>
                      <td width="10px">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                          <button class="btn btn-sm btn-danger">
                            Eliminar
                          </button>
=======
                          Ver
                        </a>
                      </td>
                      <td width="10px">
                          <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-outline-success">
                            Editar
                          </a>
                      </td>
                      <td width="10px">
                        <a>{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                          <button class="btn btn-sm btn-outline-danger" style="padding:8px">
                            Eliminar
                          </button>
                        </a>
>>>>>>> cambios SATH
                        {!! Form::close() !!}
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            {{ $tags->render() }}
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection
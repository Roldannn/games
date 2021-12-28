@extends('layouts.template')
@section('title', $game->name)
@section('content')
    <div class="container vh-100">
        <div class="d-flex h-100">
            <div class="row w-100">
                <div class="m-auto col-8 p-5 rounded shadow bg-light">
                    <h1>Detalle del juego {{ $game->name }}</h1>
                    <table class="table table-hover mt-5">
                    <tbody>
                        <tr>
                        <th scope="row">Nombre</th>
                        <td>{{ $game->name }}</td>
                        </tr>
                        <tr>
                        <th scope="row">URL Imagen</th>
                        <td><img src="{{ $game->url_image }}"></td>
                        </tr>
                        <tr>
                        <th scope="row">Descripción</th>
                        <td>{{ $game->description }}</td>
                        </tr>
                        <tr>
                        <th scope="row">URL</th>
                        <td><a href="{{ $game->url }}" target="_blank">Ir</a></td>
                        </tr>
                        <tr>
                        <th scope="row">Estado</th>
                        <td>{{ $game->status == 1 ? 'Online' : 'Offline' }}</td>
                        </tr>
                    </tbody>
                    </table>
                    <a class="btn btn-secondary" href="{{ route('games.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex bd-highlight">
            <div class="p-2 w-100 bd-highlight">
                <h1 class="display-4">Detalle del juego {{ $game->name }}</h1>
            </div>
        </div>
        <table class="table">
            <tbody>
              <tr>
                <th scope="row">Nombre</th>
                <td>{{ $game->name }}</td>
              </tr>
              <tr>
                <th scope="row">URL Imagen</th>
                <td><img src="{{ $game->url_image }}"></td>
              </tr>
              <tr>
                <th scope="row">Descripción</th>
                <td>{{ $game->description }}</td>
              </tr>
              <tr>
                <th scope="row">URL</th>
                <td><a href="{{ $game->url }}" target="_blank">Ir</a></td>
              </tr>
              <tr>
                <th scope="row">Estado</th>
                <td>{{ $game->status == 1 ? 'Online' : 'Offline' }}</td>
              </tr>
            </tbody>
          </table>
          <a class="btn btn-secondary" href="{{ route('games.index') }}">Volver</a>
    </div>

@endsection

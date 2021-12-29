@extends('layouts.template')
@section('title', $title)
@section('content')


    <div class="container">

        <div class="d-flex bd-highlight">
            <div class="p-2 w-100 bd-highlight">
                <h1>Listado de juegos</h1>
            </div>
            <div class="p-2 flex-shrink-1 bd-highlight">
                <a href="{{ route('games.create') }}" class="btn btn-primary btn-lg active text-nowrap">Registrar</a>
            </div>
        </div>
        <table class="table table-striped table-dark table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripción</th>
                <th scope="col">URL</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->name }}</td>
                        <td><img src="{{ $game->url_image }}"></td>
                        <td>{{ $game->description }}</td>
                        <td><a href="{{ $game->url }}" target="_blank">Ir</a></td>
                        <td>{{ $game->status == 1 ? 'Online' : 'Offline' }}</td>
                        <td class="d-inline-flex">
                            <a class="btn btn-primary mx-1" href="{{ route('games.show', $game->id) }}">Ver</a>
                            <a class="btn btn-primary mx-1" href="{{ route('games.edit', $game->id) }}">Editar</a>
                            <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary mx-1" type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        <div class="m-auto">
            {{ $games->links("pagination::bootstrap-4") }}
        </div>
    </div>
@endsection

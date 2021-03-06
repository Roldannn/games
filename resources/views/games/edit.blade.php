@extends('layouts.template')
@section('title', 'Editar Juego')
@section('content')
<div class="container vh-100">
    <div class="d-flex h-100">
        <div class="row w-100">
            <div class="m-auto col-8 p-5 rounded shadow bg-light">
                <h1>Editar Juego {{ $game->name }}</h1>
                <form action="{{ route('games.update', $game) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $game->name) }}" placeholder="Ingresar Nombre">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="url_image">URL de Imagen</label>
                        <input type="text" class="form-control" name="url_image" id="url_image" value="{{ old('url_image', $game->url_image) }}" placeholder="Ingresar URL Imagen">
                        @error('url_image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $game->description) }}" placeholder="Ingresar Descripción">
                        @error('description')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="url">URL del Juego</label>
                        <input type="text" class="form-control" name="url" id="url" value="{{ old('url', $game->url) }}" placeholder="Ingresar URL del Juego">
                        @error('url')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Estado</label>
                        <div class="form-check">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status" name="status" class="custom-control-input" value="1" {{ old('status', (string)$game->status) !== '0' ? 'checked' : ''}}>
                                <label class="custom-control-label" for="status">Online</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="status2" name="status" class="custom-control-input" value="0" {{ old('status', (string)$game->status) === '0' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status2">Offline</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a class="btn btn-secondary" href="{{ route('games.index') }}">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

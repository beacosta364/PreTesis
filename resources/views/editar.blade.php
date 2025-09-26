@extends('layouts.plantilla')

@section('contenido')
@can('acciones.show')
    <h1 class="h1controlador">Editar Controlador</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('actualizar', $controlador->id) }}">
        @csrf
        <div class="mb-3">
            <label>ID de Usuario</label>
            <input type="text" name="usuario_id" class="form-control" 
                value="{{ $controlador->usuario_id ?? '' }}">
        </div>
        <div class="mb-3">
            <label>Nombre de Usuario</label>
            <input type="text" name="usuario_nombre" class="form-control" 
                value="{{ $controlador->usuario_nombre ?? '' }}">
        </div>
        <div class="mb-3">
            <label>Nombre del Controlador</label>
            <input type="text" name="nombre" class="form-control" 
                value="{{ $controlador->nombre }}">
        </div>
        <div class="mb-3">
            <label>IP del controlador</label>
            <input type="text" name="ip" class="form-control" 
                value="{{ $controlador->ip }}" required>
        </div>
        <button class="boton-cancelar">Actualizar</button>
        <a href="{{ route('bodega.home') }}" class="boton-cancelar">Cancelar</a>

    </form>
@endcan
@endsection

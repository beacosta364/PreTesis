@extends('layouts.plantilla')

@section('contenido')
@can('configuracion.update')
<div>
    <h2>Editar IP</h2>

    @if ($configuracion)
        <!-- Si la configuración existe, mostrar el formulario para editar la IP -->
        <form action="{{ route('configuracion.update') }}" method="POST">
            @csrf
            @method('PUT')
            <label for="ip">IP:</label>
            <input type="text" name="ip" value="{{ $configuracion->ip }}" required>
            <button type="submit">Actualizar</button>
        </form>
    @else
        <!-- Si no hay configuración de IP, mostrar un mensaje -->
        <p>No hay una IP configurada. Por favor, configure la IP primero.</p>
        <a href="{{ route('configuracion.create') }}">Configurar IP</a>
    @endif
</div>
@endcan
@endsection

@extends('layouts.plantilla')

@section('contenido')
    <h1>Configuración de IP</h1>
    
    @if ($configuracion)
        <p>IP registrada: {{ $configuracion->ip }}</p>
        <a href="{{ route('configuracion.edit') }}">Editar IP</a>
        <br>
        <a href="{{ route('configuracion.control') }}">Ir a la gestión de alarma y acceso</a> <!-- Nuevo enlace -->
    @else
        <p>No hay configuración de IP registrada.</p>
        <a href="{{ route('configuracion.create') }}">Agregar IP</a>
    @endif
@endsection

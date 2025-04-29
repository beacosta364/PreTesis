@extends('layouts.plantilla')

@section('contenido')
@can('configuracion.index')
    <div class="config-card">
        <h1 class="config-titulo">Configuración de IP</h1>
        
        @if ($configuracion)
            <p class="config-info">IP registrada: <strong>{{ $configuracion->ip }}</strong></p>
            <div class="config-links">
                <a href="{{ route('configuracion.edit') }}" class="btn-link">Editar IP</a>
                <a href="{{ route('configuracion.control') }}" class="btn-link">Ir a la gestión de acceso</a>
            </div>
        @else
            <p class="config-info">No hay configuración de IP registrada.</p>
            <a href="{{ route('configuracion.create') }}" class="btn-link">Agregar IP</a>
        @endif
    </div>
@endcan
@endsection
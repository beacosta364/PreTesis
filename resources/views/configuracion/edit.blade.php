@extends('layouts.plantilla')

@section('contenido')

@can('configuracion.update')
<div class="form-card">
    <h2 class="form-titulo">Editar IP</h2>

    @if ($configuracion)
        <form action="{{ route('configuracion.update') }}" method="POST" class="form-ip">
            @csrf
            @method('PUT')
            <label for="ip">Dirección IP:</label>
            <input type="text" name="ip" id="ip" value="{{ $configuracion->ip }}" required class="input-ip">
            <button type="submit" class="btn-submit">Actualizar</button>
        </form>
    @else
        <p class="config-info">No hay una IP configurada. Por favor, configúrela primero.</p>
        <a href="{{ route('configuracion.create') }}" class="btn-link">Configurar IP</a>
    @endif
</div>
@endcan
@endsection


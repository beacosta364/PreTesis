@extends('layouts.plantilla')

@section('contenido')
@can('ingreso.index')
    <h2>Historial de Accesos a la Bodega.</h2>

    <a href="{{ route('bodega.historial.pdf', request()->all()) }}" target="_blank" style="margin-left: 10px;">
    <button type="button">Exportar PDF</button>
    </a>


    <!-- Formulario de filtro -->
    <form method="GET" action="{{ route('bodega.historial') }}" style="margin-bottom: 20px;">
        <label for="usuario">Usuario:</label>
        <select name="usuario" id="usuario">
            <option value="">-- Todos --</option>
            @foreach ($usuarios as $user)
                <option value="{{ $user->id }}" {{ request('usuario') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        <label for="desde">Desde:</label>
        <input type="date" name="desde" value="{{ request('desde') }}">

        <label for="hasta">Hasta:</label>
        <input type="date" name="hasta" value="{{ request('hasta') }}">

        <button type="submit">Filtrar</button>
    </form>

    @if ($registros->count())
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre del Usuario</th>
                    <th>Acción</th>
                    <th>Fecha y Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $registro->nombre_usuario }}</td>
                        <td>{{ $registro->accion }}</td>
                        <td>{{ $registro->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay registros que coincidan con los filtros seleccionados.</p>
    @endif

    @endcan
@endsection

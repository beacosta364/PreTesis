@extends('layouts.plantilla')

@section('contenido')
@can('ingreso.index')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Historial de Accesos</title>
  <link rel="stylesheet" href="{{ url('/css/historialAccesoBodega.css') }}">

</head>
<body>

  <div class="card">
    <h2>Historial de Accesos a la Bodega</h2>

    <form method="GET" action="{{ route('bodega.historial') }}" class="filters">
      <div class="filter-group">
        <label for="usuario">Usuario:</label>
        <select name="usuario" id="usuario">
          <option value="">-- Todos --</option>
          @foreach ($usuarios as $user)
            <option value="{{ $user->id }}" {{ request('usuario') == $user->id ? 'selected' : '' }}>
              {{ $user->name }}
            </option>
          @endforeach
        </select>
      </div>

      <div class="filter-group">
        <label for="desde">Desde:</label>
        <input type="date" name="desde" value="{{ request('desde') }}">
      </div>

      <div class="filter-group">
        <label for="hasta">Hasta:</label>
        <input type="date" name="hasta" value="{{ request('hasta') }}">
      </div>

      <button type="submit">Filtrar</button>

      <a href="{{ route('bodega.historial.pdf', request()->all()) }}" target="_blank">
        <button type="button">Exportar PDF</button>
      </a>
    </form>

    @if ($registros->count())
      <table>
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
  </div>

</body>
</html>

    @endcan
@endsection

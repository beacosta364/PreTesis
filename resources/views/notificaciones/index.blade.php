@extends('layouts.plantilla')

@section('contenido')
@can('notificaciones.index')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Notificaciones</title>
  <link rel="stylesheet" href="{{ url('/css/indexNotificacion.css') }}">

</head>
<body>

  <div class="card">
    <h2>Crear Nueva Notificación</h2>

    @can('notificaciones.create')
    <form class="theform" action="{{ route('notificaciones.store') }}" method="POST">
      @csrf
      <label for="titulo">Título:</label>
      <input id="titulo" type="text" name="titulo" required>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required></textarea>

      <button type="submit">Crear Notificación</button>
    </form>
    @endcan

    @if (session('success'))
      <p class="alert-success">{{ session('success') }}</p>
    @endif
  </div>

  <div class="card">
    <h2>Lista de Notificaciones</h2>
    <ul class="notifications">
      @foreach($notificaciones as $notificacion)
        <li>
          <strong>{{ $notificacion->titulo }}</strong>
          <span>{{ $notificacion->mensaje }}</span>
          <small>{{ $notificacion->created_at->format('d/m/Y H:i') }}</small>
          <div class="actions">
            @can('notificaciones.update')
              <a href="{{ route('notificaciones.edit', $notificacion->id) }}">Editar</a>
            @endcan
            @can('notificaciones.destroy')
              <form class="theform" action="{{ route('notificaciones.destroy', $notificacion->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?')">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
              </form>
            @endcan
          </div>
        </li>
      @endforeach
    </ul>
  </div>

</body>
</html>


@endcan
@endsection

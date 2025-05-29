@extends('layouts.plantilla')

@section('contenido')
@can('notificaciones.update')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Editar Notificación</title>
  <link rel="stylesheet" href="{{ url('/css/editNotificacion.css') }}">
</head>
<body>

  <div class="card">
    <h1>Editar Notificación</h1>

    <form class="theform" action="{{ route('notificaciones.update', $notificacion->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label for="titulo">Título:</label>
      <input id="titulo" type="text" name="titulo" value="{{ $notificacion->titulo }}" required>

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required>{{ $notificacion->mensaje }}</textarea>

      <div class="buttons">
        <a href="{{ route('notificaciones.index') }}">Volver</a>
        <button type="submit">Actualizar</button>
      </div>
    </form>
  </div>

</body>
</html>


@endcan

@endsection
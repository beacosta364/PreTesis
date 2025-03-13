@extends('layouts.plantilla')

@section('contenido')

<h1>Editar Notificación</h1>

<form action="{{ route('notificaciones.update', $notificacion->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título:</label>
    <input type="text" name="titulo" value="{{ $notificacion->titulo }}" required>

    <label>Mensaje:</label>
    <textarea name="mensaje" required>{{ $notificacion->mensaje }}</textarea>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('notificaciones.index') }}">Volver</a>


@endsection
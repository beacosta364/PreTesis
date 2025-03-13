@extends('layouts.plantilla')

@section('contenido')

<h1>Notificaciones</h1>

<!-- Formulario para agregar una nueva notificación -->
<form action="{{ route('notificaciones.store') }}" method="POST">
    @csrf
    <label>Título:</label>
    <input type="text" name="titulo" required>
    <label>Mensaje:</label>
    <textarea name="mensaje" required></textarea>
    <button type="submit">Crear Notificación</button>
</form>

<!-- Mensajes de éxito -->
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<!-- Listado de notificaciones -->
<h2>Lista de Notificaciones</h2>
<ul>
    @foreach($notificaciones as $notificacion)
        <li>
            <strong>{{ $notificacion->titulo }}</strong>: {{ $notificacion->mensaje }}  
            <small>{{ $notificacion->created_at }}</small>
            <a href="{{ route('notificaciones.edit', $notificacion->id) }}">Editar</a>
            <form action="{{ route('notificaciones.destroy', $notificacion->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>

@endsection

@extends('layouts.plantilla')

@section('contenido')
<div>
    <h2>Registrar IP</h2>
    <form action="{{ route('configuracion.store') }}" method="POST">
        @csrf
        <label for="ip">IP:</label>
        <input type="text" name="ip" required>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection

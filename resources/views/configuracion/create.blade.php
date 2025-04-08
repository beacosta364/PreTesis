@extends('layouts.plantilla')

@section('contenido')
@can('configuracion.create')
<div>
    <h2>Registrar IP</h2>
    <form action="{{ route('configuracion.store') }}" method="POST">
        @csrf
        <label for="ip">IP:</label>
        <input type="text" name="ip" required>
        <button type="submit">Guardar</button>
    </form>
</div>
@endcan
@endsection

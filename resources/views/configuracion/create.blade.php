@extends('layouts.plantilla')

@section('contenido')



@can('configuracion.create')
<div class="form-card">
    <h2 class="form-titulo">Registrar IP</h2>
    <form action="{{ route('configuracion.store') }}" method="POST" class="form-ip">
        @csrf
        <label for="ip">Dirección IP:</label>
        <input type="text" name="ip" id="ip" required class="input-ip">
        <button type="submit" class="btn-submit">Guardar</button>
    </form>
</div>
@endcan
@endsection




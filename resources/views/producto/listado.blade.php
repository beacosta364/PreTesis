@extends('layouts.plantilla')

@section('contenido')
<div class="container mt-4">
    <h2 class="mb-4">Listado de Productos</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad Disponible</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                    <td>{{ $producto->cantidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

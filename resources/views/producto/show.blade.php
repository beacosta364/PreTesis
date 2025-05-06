@extends('layouts.plantilla')

@section('contenido')
<section class="card-show-producto">
    <h1>Detalles del Producto</h1>

    <!-- Imagen del producto -->
    <img src="{{ asset('img/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">

    <!-- Contenedor de tabla -->
    <div class="tabla-container">
        <table class="tabla-detalles">
            <tr>
                <th>Nombre:</th>
                <td>{{ $producto->nombre }}</td>
            </tr>
            <tr>
                <th>Descripción:</th>
                <td>{{ $producto->descripcion }}</td>
            </tr>
            <tr>
                <th>Cantidad:</th>
                <td>{{ $producto->cantidad }}</td>
            </tr>
            <tr>
                <th>Stock mínimo:</th>
                <td>{{ $producto->min_stock }}</td>
            </tr>
            <tr>
                <th>Categoría:</th>
                <td>{{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}</td>
            </tr>
        </table>
    </div>

    <a href="{{ route('producto.index') }}" class="btn-volver">Volver a la lista de productos</a>
</section>

@endsection

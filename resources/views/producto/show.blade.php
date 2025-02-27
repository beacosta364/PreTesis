@extends('layouts.plantilla')

@section('contenido')

<section class="card-show">
    <!-- Imagen del producto -->
    <img src="{{ asset('img/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">

    <!-- Nombre del producto -->
    <h2>{{ $producto->nombre }}</h2>

    <!-- Descripción -->
    <p><strong>Descripción: </strong>{{ $producto->descripcion }}</p>

    <!-- Cantidad -->
    <p><strong>Cantidad: </strong>{{ $producto->cantidad }}</p>

    <!-- Stock mínimo -->
    <p><strong>Stock mínimo: </strong>{{ $producto->min_stock }}</p>

    <!-- Categoría -->
    <p><strong>Categoría: </strong>{{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}</p>
</section>

@endsection

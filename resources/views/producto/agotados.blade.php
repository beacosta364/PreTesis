@extends('layouts.plantilla')

@section('contenido')
<nav class="nav-botones">
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ route('productos.agotados.pdf') }}" target="_blank" class="nav-link btn-generar-pdf">Generar PDF</a>
        </li>
        <li class="nav-item">
        <h2 class="titulo-productos-por-agotarse">Lista de productos por agotarse o agotados...</h2>
        </li>
    </ul>
    </nav>

    <section class="container-cards">

        @if($productosAgotados->isEmpty())
            <p>No hay productos por agotarse o agotados en este momento.</p>
        @else
            <table class="tabla-productos">
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Cantidad</th>
                        <th>Stock Mínimo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productosAgotados as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->min_stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection

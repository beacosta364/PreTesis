@extends('layouts.plantilla')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos Agotados o por Agotarse</title>
  <link rel="stylesheet" href="{{ url('/css/agotados.css') }}">
</head>
<body class="agotados-body">

  <div class="agotados-container">
    <div class="agotados-header">
        <h2>Lista de productos agotados o por agotarse</h2>
    </div>

    <div class="agotados-actions">
        <a class="agotados-pdf-link" href="{{ route('productos.agotados.pdf') }}" target="_blank">Generar PDF</a>
    </div>

    <section class="tabla-productos">
    <div class="tabla-responsive">
      @if($productosAgotados->isEmpty())
        <p class="agotados-message">No hay productos por agotarse o agotados en este momento.</p>
      @else
        <table class="agotados-table">
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
        </div>
    </section>
  </div>

</body>
</html>


@endsection

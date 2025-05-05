@extends('layouts.plantilla')

@section('contenido')
@can('reporteinventarios.show')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Productos</title>
  <link rel="stylesheet" href="{{ url('/css/listadoProductos.css') }}">
</head>
<body>

  <div class="productos-header">
    <h2>Listado de Productos</h2>
  </div>

  <div class="productos-actions">
    <a class="productos-pdf-link" href="{{ route('productos.pdf') }}" target="_blank">Generar PDF</a>
  </div>

  <section class="productos-section">
    <div class="productos-table-container">
      <table class="productos-table">
        <thead>
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
  </section>

</body>
</html>

@endcan
@endsection

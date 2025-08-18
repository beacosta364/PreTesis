@extends('layouts.plantilla')

@section('contenido')
@can('reporteinventarios.show')
<link rel="stylesheet" href="{{url('/css/estilos-movimiento-masivo.css')}}">
  <div class="productos-header">
    <h2 class="titulo-mv">Listado de Productos</h2>
  </div>

  <div class="contenedor-boton">
    <a class="btn-pdfproductos" href="{{ route('productos.pdf') }}" target="_blank">Generar PDF</a>
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

@endcan
@endsection

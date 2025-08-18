@extends('layouts.plantilla')

@section('contenido')
@can('reportemovimientos.show')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro de Movimientos</title>
  <link rel="stylesheet" href="{{ url('/css/filtro.css') }}">
</head>
<body>

  <h2>Registro de Movimientos Realizados</h2>

  <div class="pdf-link">
    <a href="{{ route('movimientos.pdf', request()->all()) }}" target="_blank">Generar PDF movimientos detallado</a>
  </div>

  <form method="GET" action="{{ route('movimientos.filtrar') }}">
    <div class="filtros-container">
      <div class="filtro">
        <label for="fecha_inicio">Fecha de Inicio</label>
        <input type="date" name="fecha_inicio" value="{{ request('fecha_inicio') }}">
      </div>
      <div class="filtro">
        <label for="fecha_fin">Fecha de Fin</label>
        <input type="date" name="fecha_fin" value="{{ request('fecha_fin') }}">
      </div>
      <div class="filtro">
        <label for="buscar_producto">Buscar Producto</label>
        <input type="text" id="buscar_producto" placeholder="Escribe para buscar...">
        <label for="producto_id">Producto</label>
        <select name="producto_id" id="producto_id">
          <option value="">Todos</option>
          @foreach ($productos as $producto)
            <option value="{{ $producto->nombre_producto }}" {{ request('producto_id') == $producto->nombre_producto ? 'selected' : '' }}>
              {{ $producto->nombre_producto }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="filtro">
        <label for="buscar_usuario">Buscar Usuario</label>
        <input type="text" id="buscar_usuario" placeholder="Escribe para buscar...">
        <label for="usuario_id">Usuario</label>
        <select name="usuario_id" id="usuario_id">
          <option value="">Todos</option>
          @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->nombre_usuario }}" {{ request('usuario_id') == $usuario->nombre_usuario ? 'selected' : '' }}>
              {{ $usuario->nombre_usuario }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="filtro">
        <label for="tipo_movimiento">Tipo Movimiento</label>
        <select name="tipo_movimiento">
          <option value="">Todos</option>
          <option value="ingresar" {{ request('tipo_movimiento') == 'ingresar' ? 'selected' : '' }}>Ingresar</option>
          <option value="extraer" {{ request('tipo_movimiento') == 'extraer' ? 'selected' : '' }}>Extraer</option>
        </select>
      </div>
      <div class="filtro">
        <button type="submit">Aplicar Filtros</button>
        <a href="{{ route('movimientos.filtrar') }}" class="btn-limpiar-filtro">Limpiar Filtros</a>
      </div>
    </div>
  </form>

  <h3>Resultados</h3>
<section class="tabla-productos">
    <div class="tabla-responsive">
      <table>
        <thead>
          <tr>
            <th>Producto</th>
            <th>Usuario</th>
            <th>Tipo de Movimiento</th>
            <th>Cantidad</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movimientos as $movimiento)
            <tr>
              <td>{{ $movimiento->nombre_producto }}</td>
              <td>{{ $movimiento->nombre_usuario }}</td>
              <td>{{ ucfirst($movimiento->tipo_movimiento) }}</td>
              <td>{{ $movimiento->cantidad }}</td>
              <td>{{ $movimiento->created_at->format('d/m/Y H:i') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</section>
  <!-- Paginación -->
  <div style="margin-top: 1rem;">
    {{ $movimientos->links() }}
  </div>

  <script>
    function filtrarOpciones(inputId, selectId) {
      document.getElementById(inputId).addEventListener('input', function () {
        let filtro = this.value.toLowerCase();
        let opciones = document.getElementById(selectId).options;
        for (let i = 1; i < opciones.length; i++) {
          let texto = opciones[i].text.toLowerCase();
          opciones[i].style.display = texto.includes(filtro) ? '' : 'none';
        }
      });
    }

    filtrarOpciones('buscar_producto', 'producto_id');
    filtrarOpciones('buscar_usuario', 'usuario_id');
  </script>

</body>
</html>

@endcan
@endsection

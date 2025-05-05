@extends('layouts.plantilla')

@section('contenido')
@can('reportemovimientos.show')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro de Movimientos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 1rem;
      background-color: #fdfaf6;
      color: #333;
    }

    h2, h3 {
      text-align: center;
      color: #e75b1e;
    }

    .pdf-link {
      display: block;
      text-align: center;
      margin-bottom: 1rem;
    }

    .pdf-link a {
      background-color: #e49236;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .pdf-link a:hover {
      background-color: #e75b1e;
    }

    .filtros-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
      margin-bottom: 2rem;
      align-items: flex-end;
    }

    .filtro {
      display: flex;
      flex-direction: column;
    }

    .filtro label {
      margin-bottom: 0.3rem;
      font-weight: bold;
      color: #e75b1e;
    }

    .filtro input,
    .filtro select {
      padding: 0.4rem;
      min-width: 180px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .filtro button {
      padding: 0.5rem 1rem;
      background-color: #e75b1e;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 0.5rem;
    }

    .filtro button:hover {
      background-color: #c94a14;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
      background-color: white;
    }

    th, td {
      padding: 0.75rem;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #e49236;
      color: white;
    }

    @media (max-width: 768px) {
      .filtros-container {
        flex-direction: column;
        align-items: stretch;
      }

      .filtro {
        width: 100%;
      }

      table {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <h2>Registro de movimientos realizados</h2>

  <div class="pdf-link">
    <a href="{{ route('movimientos.pdf', request()->all()) }}" target="_blank">Generar PDF</a>
  </div>

  <form method="GET" action="{{ route('movimientos.filtrar') }}">
    <div class="filtros-container">
      <div class="filtro">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input type="date" name="fecha_inicio" value="{{ request('fecha_inicio') }}">
      </div>
      <div class="filtro">
        <label for="fecha_fin">Fecha Fin</label>
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
      </div>
    </div>
  </form>

  <h3>Resultados</h3>

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

  <!-- Paginación -->
  <div style="margin-top: 1rem;">
    {{ $movimientos->links() }}
  </div>

  <!-- JavaScript para búsqueda dinámica -->
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

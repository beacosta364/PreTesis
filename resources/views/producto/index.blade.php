@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
    <h2 class="titulo-tabla"> Listado de productos</h2>
    <nav class="nav-botones-productos">
        <ul class="nav-menu-productos">
            <li class="nav-item-productos">
                <a href="{{ route('productos.pdf') }}" target="_blank" class="pdf-productos">Generar PDF</a>
            </li>
            @can('productos.create')
            <li class="nav-item-productos">
                <a href="{{ route('producto.create') }}" class="agregar-producto">Agregar Producto</a>
            </li>
            @endcan
            <li class="nav-item-productos">
                <a href="{{ route('producto.agotados') }}" class="pdf-productos">Productos agotados o por agotarse</a>
            </li>
        </ul>
    </nav>

    <!-- <form method="GET" action="{{ route('producto.index') }}" class="barra-busqueda-form">
        <div class="barra-busqueda-row">
            <input 
                type="text" 
                name="busqueda" 
                class="barra-busqueda-input" 
                placeholder="Buscar por nombre o ID..." 
                value="{{ request('busqueda') }}"
            >
            <button type="submit" class="barra-busqueda-boton">Buscar</button>
        </div>
    </form> -->
    <form method="GET" action="{{ route('producto.index') }}" class="barra-busqueda-form">
        <div class="barra-busqueda-row">
            <input 
                type="text" 
                name="busqueda" 
                class="barra-busqueda-input" 
                placeholder="Buscar por nombre o ID..." 
                value="{{ request('busqueda') }}"
            >

            <select name="categoria" class="barra-busqueda-input">
                <option value="">-- Todas las categorías --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ (request('categoria') == $categoria->id) ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="barra-busqueda-boton">Buscar</button>
        </div>
    </form>


<section class="tabla-productos">
    <div class="tabla-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Categoría</th>
                    <th>Cantidad</th>
                    <th>Stock mínimo</th>
                    <th>Usuario</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody class="tabla-productos">
                @foreach ($productos as $producto)
                <tr>                
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>
                    <img src="{{ asset('img/'.$producto->imagen) }}" alt="{{ $producto->imagen }}">
                    </td>
                    <td>{{ $producto->descripcion }}</td>
                    <td> 
                    @if ($producto->categoria)
                        {{ $producto->categoria->nombre }}
                    @else
                        Sin categoría
                    @endif
                    </td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->min_stock }}</td>
                    <td>
                    @if ($producto->usuario)
                        {{ $producto->usuario->name }}
                    @else
                        Usuario eliminado
                    @endif
                    </td>
                    <td>
                    <a href="{{ route('producto.show', $producto->id) }}">
                        <img src="{{ asset('img/Vista.png') }}" alt="Ver" width="35"height="40">
                    </a>
                    @can('productos.update')
                    <a href="{{ route('producto.edit', $producto->id) }}">
                        <img src="{{ asset('img/Editar.png') }}" alt="Editar" width="35"height="40">
                    </a>
                    @endcan
                    @can('productos.destroy')
                    <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" onsubmit="return confirmarEliminacion()" >
                        @csrf
                        @method('DELETE')
                        <input type="image" src="{{ asset('img/Eliminar.png') }}" alt="Eliminar" width="35"height="40">
                    </form>
                    @endcan
                    </td>                                
                </tr>
                @endforeach  
            </tbody>
        </table>
    </div>
</section>
</section>

<script>
    function confirmarEliminacion() {
        return confirm('¿Seguro deseas eliminar?');
    }
</script>

@endsection

@extends('layouts.plantilla')

@section('contenido')

{{-- CSS de Select2 --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

{{-- JS de Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

<section class="container-tabla">
    <h2 class="titulo-tabla">Actualizar cantidades de productos</h2>

    {{-- Botón para volver al listado --}}
    <form>
        <button type="button" class="barra-busqueda-boton" onclick="window.location.href='{{ route('producto.index') }}'">
            Listado de productos
        </button>
    </form>

    
    {{-- Formulario de filtro con Select2 --}}
<form method="GET" action="{{ route('productos.form.actualizar.cantidades') }}" style="margin-top: 20px; margin-bottom: 20px;">
    <label for="categorias"><strong>Filtrar por categorías:</strong></label>
    <select id="categorias" name="categorias[]" multiple>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ in_array($categoria->id, $categoriasSeleccionadas ?? []) ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>

    <div style="display: inline-flex; gap: 8px; vertical-align: middle;">
        <button type="submit" class="barra-busqueda-boton">Filtrar</button>
        <a href="{{ route('productos.form.actualizar.cantidades') }}" class="barra-busqueda-boton" style="text-decoration: none;">
            Limpiar Filtro
        </a>
    </div>
</form>


    {{-- Formulario para actualizar cantidades --}}
    <form action="{{ route('productos.actualizar.cantidades') }}" method="POST">
        @csrf

        <div class="tabla-responsive">
            <table>
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Nombre</th>
                        <th>Nueva Cantidad</th>
                        <th>Categoría</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <!-- <td>{{ $producto->id }}</td> -->
                            <td>{{ $producto->nombre }}</td>
                            <td>
                                <input 
                                    type="number" 
                                    name="cantidades[{{ $producto->id }}]" 
                                    value="{{ $producto->cantidad }}" 
                                    min="0" 
                                    class="barra-busqueda-input" 
                                    style="width: 100px;"
                                >
                            </td>
                            <td>{{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoría' }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit" class="barra-busqueda-boton">Guardar cambios</button>
        </div>
    </form>
</section>

{{-- Activar Select2 --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#categorias').select2({
            placeholder: "Selecciona categorías",
            allowClear: true,
            width: '250px'
        });
    });
</script>

@endsection

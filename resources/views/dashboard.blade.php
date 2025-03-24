@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <img src="img/GestionDelSistema.png" alt=" ">
        <div class="cabecera-text">
        <a href="{{ route('producto.movimiento') }}">Gestion de inventarios</a>
    </div> 
    </div>
        
    </div>
    
            
    </div>
        <div class="card">
            <div class="cabecera">
                <img src="{{ asset('img/Productos.png') }}" alt="">
            <div class="cabecera-text">
            <h3>{{ $totalProductos }} productos registrados</h3>
            </div>
            </div>
            <a href="{{ route('producto.index') }}">Todos</a>
        </div>
        
    
    </div>

           <!-- Configuración y soporte -->
           <div class="card">
            <div class="cabecera">
                <img src="img/Admin.png" alt="">
                <div class="cabecera-text">
                </div>
                <h3>{{ $totalUsuarios }} usuarios registrados</h3>
            </div>
            <a href="{{ route('users.index') }}">Usuarios registrados</a>
        </div>   


        <!-- Reportes -->
        <div class="card">
            <div class="cabecera">
                <img src="img/Reportes.png" alt="">
                <div class="cabecera-text"> 
                </div>  
                <h3>Se han realizado {{ $movimientosMes }} movimientos este mes</h3>
            </div>
            <a href="{{ route('movimientos.filtrar') }}">Reportes de movimientos</a>
         </div>

    </section >

    <section class="container-cards">
    <section>
    <h2>Productos agotados o por agotarse por categoría</h2>

    <form method="GET" action="{{ route('dashboard') }}">
        <label for="categoria">Selecciona una categoría:</label>
        <select name="categoria" id="categoria" onchange="this.form.submit()">
            <option value="todas" {{ ($categoriaSeleccionada == 'todas' || !$categoriaSeleccionada) ? 'selected' : '' }}>Todas</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoriaSeleccionada == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Botón para generar el PDF -->
     <!--target="_blank" para abrir el pdf en una pestaña nueva -->
    <form method="GET" action="{{ route('pdf.productos.agotados.categoria') }}" target="_blank"> 
    <input type="hidden" name="categoria" value="{{ $categoriaSeleccionada ?? 'todas' }}">
    <button type="submit">Generar PDF</button>
    </form>



    <div class="productos-resultado">
        @forelse($productosFiltrados as $producto)
            <div class="producto-card">
                <strong>{{ $producto->nombre }}</strong> - 
                {{ $producto->categoria->nombre ?? 'Sin categoría' }} |
                Cantidad: {{ $producto->cantidad }} |
                Stock mínimo: {{ $producto->min_stock ?? 'No definido' }}
            </div>
        @empty
            <p>No hay productos agotados o por agotarse en esta categoría.</p>
        @endforelse
    </div>
</section>

        
        <section>
        <h2>Gráfica de productos más usados en el mes (Unidades retiradas)</h2>
        </section>
    </section>

@endsection
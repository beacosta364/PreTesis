@extends('layouts.plantilla')

@section('contenido')
<h3>Dashboard</h3>

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <img src="img/GestionDelSistema.png" alt=" ">
        <div class="cabecera-text">
    </div> 
    </div>
        <a href="{{ route('producto.movimiento') }}">Gestion de inventarios</a>
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
        <h2>lista de productos agotados por categorias</h2>
        </section>
        
        <section>
        <h2>Gráfica de productos más usados en el mes (Unidades retiradas)</h2>
        </section>
    </section>

@endsection
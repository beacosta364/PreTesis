<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>panel-control</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-tablas.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-formularios.css') }}">
    <link rel="stylesheet" href="{{url('/css/estilos-movimiento-productos.css')}}">
    <link rel="stylesheet" href="{{url('/css/styles-perfil.css')}}">


    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite(['resources/js/app.js'])

    
</head>
<body>
    <!-- slidebar -->
    <aside class="slidebar" id="slidebar">
        <!-- <h2>My tienda</h2> -->
        <span class="logooo"><img src="{{asset('img/ABY.png')}}" alt="LOGO"></span>

        <!-- Logo Empresa -->
        <div class="element-slidebar">
            <div class="element-slidebar-btn profile">
                <span><img src="{{asset('img2/LogoLaPapa.png')}}" alt="Logo"></span>
                <p>La Papa</p>
            </div>
        </div>
        <!-- Perfil -->
         <div class="element-slidebar">
            <div class="element-slidebar-btn profile">
                <!-- <span><img src="img/face1.png" alt="avatar"></span> -->
                <!-- <span><img src="{{asset('img/face1.jpg')}}" alt="avatar"></span> -->
                <span>
                    <img src="{{ Auth::user()->perfil && Auth::user()->perfil->foto_perfil ? asset('storage/img-perfil/' . Auth::user()->perfil->foto_perfil) : asset('img/face1.jpg') }}" alt="avatar">
                </span>
                <p>{{Auth::user()->name}}</p>
            </div>
            <div class="element-slidebar-content">
                <a href="{{'profile'}}">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Salir"class="logout-link">
                </form>
            </div>
        </div>

        <!-- Gestion del sistema -->
        
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img2\GestionIcono1.png')}}" alt="Gestion del sistema"></span>
                <p>Gestion del sistema</p>
            </div>
            <div class="element-slidebar-content">
                <a href="{{ route('producto.movimiento') }}">Gestion de inventario</a>
                <a href="{{ route('configuracion.control') }}">Ingresar a bodega</a>
                <a href="{{ route('users.index') }}">Lista de usuarios registrados</a>
                <a href="{{ route('producto.agotados') }}" class="btn btn-warning">Ver Productos Agotados o Por Agotarse</a>
                <a href="{{ url('/usuarios/crear') }}">Registrar nuevo usuario</a>   
                <a href="{{ url('/usuarios-roles') }}">gestionar rol de usuarios</a>
            </div>
        </div>


        <!-- Productos -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/rokrt.png')}}" alt="Product"></span> -->
                    <span><img src="{{ asset('img2\ProductossIcono1.png') }}" alt="Gestion de productos"></span>
                    <p>Productos</p>
                </div>
                <div class="element-slidebar-content">
                    
                    <a href="{{ route('producto.index') }}">Todos</a>
                    <a href="{{ route('producto.create') }}">Agregar</a>
                </div>
            </div>

        <!-- Categorias -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/icono1.png')}}" alt="Product"></span> -->
                    <span><img src="{{asset('img2\CategoriaIcono1.png')}}" alt="Gestion del categorias"></span>
                    <p>Categorias</p>
                </div>
                <div class="element-slidebar-content">
                    @can('categoria.index')
                    <a href="{{ route('categoria.index') }}">Todos</a>
                    @endcan
                    @can('categoria.create')
                    <a href="{{ route('categoria.create') }}">Agregar</a>
                    @endcan
                </div>
            </div>

        <!-- notificaciones y seguridad -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img2\AccesoIcono1.png')}}" alt="Monitoreo y seguridad"></span>
                    <p>Ingresos a bodega</p>
                </div>
                <div class="element-slidebar-content">    
                    <a href="{{ route('bodega.historial') }}">Registro ingreso a bodega</a>
                    <a href="{{ route('notificaciones.index') }}">Notificaciones</a>
                </div>
            </div>

          

            <!-- Reportes -->  
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img2\ReportesIcono1.png')}}" alt="Reportes"></span>
                <p>Reportes</p>
            </div>
            <div class="element-slidebar-content">         
                <a href="{{ url('/productos-listado') }}">Reportes de inventarios</a>
                <!-- <a href="">Reportes de movimientos</a> -->
                <!-- <a href="{{ route('movimientos.index') }}">Reportes de movimientos</a> -->
                 <a href="{{ route('movimientos.filtrar') }}">Reportes de movimientos</a>
            </div>     
        </div>


          <!-- Configuración y soporte -->
          <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img2\ConfiguracionLogo1.png')}}" alt="Configuración y soporte"></span>
                    <p>Configuración y soporte</p>
                </div>
                <div class="element-slidebar-content">
                    <a href="{{ route('configuracion.create') }}">Configuración</a>
                    <a href="">Soporte y documentación</a>
                </div>
            </div>

    </aside>


    <!-- main -->
     <main class="main">
        <!-- header -->

        <header class="header">
            <!-- <h2>dasboard</h2> -->
            <button id="menu-toggle" class="menu-hamburger">☰</button>
        </header>

        <!-- Aqui se colocan todos los elementos cambiantes -->
        @yield('contenido')

     </main>
     <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
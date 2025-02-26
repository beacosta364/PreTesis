<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel-control</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-tablas.css') }}">
    <link rel="stylesheet" href="{{ url('/css/estilos-formularios.css') }}">

    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    
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
                <span><img src="{{asset('img/face1.jpg')}}" alt="avatar"></span>
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
                <span><img src="{{asset('img/GestionDelSistema.png')}}" alt="Gestion del sistema"></span>
                <p>Gestion del sistema</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Gestion de inventarios</a>
                <a href="">Ir a la gestión de alarma y acceso</a>
                <a href="">Lista de usuarios registrados</a>
                <a href="" class="btn btn-warning">Ver Productos Agotados o Por Agotarse</a>
            </div>
        </div>


        <!-- Productos -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/rokrt.png')}}" alt="Product"></span> -->
                    <span><img src="{{ asset('img/Productos.png') }}" alt="Gestion de productos"></span>
                    <p>Productos</p>
                </div>
                <div class="element-slidebar-content">
                    
                    <a href="">Todos</a>
                    <a href="">Agregar</a>
                </div>
            </div>

        <!-- Categorias -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <!-- <span><img src="{{asset('img/icono1.png')}}" alt="Product"></span> -->
                    <span><img src="{{asset('img/Categoria.png')}}" alt="Gestion del categorias"></span>
                    <p>Categorias</p>
                </div>
                <div class="element-slidebar-content">
                    <a href="{{ route('categoria.index') }}">Todos</a>
                    <a href="{{ route('categoria.create') }}">Agregar</a>
                </div>
            </div>

        <!-- Monitoreo y seguridad -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img/MonitoreodeSeguridad.png')}}" alt="Monitoreo y seguridad"></span>
                    <p>Monitoreo y seguridad</p>
                </div>
                <div class="element-slidebar-content">    
                    <a href="">Auditoria</a>
                    <a href="">Notificaciones</a>
                </div>
            </div>

            <!-- Configuración y soporte -->
            <div class="element-slidebar">
                <div class="element-slidebar-btn">
                    <span><img src="{{asset('img/ConfiguracionyReportes.png')}}" alt="Configuración y soporte"></span>
                    <p>Configuración y soporte</p>
                </div>
                <div class="element-slidebar-content">
                    <a href="">Configuración</a>
                    <a href="">Soporte y documentación</a>
                </div>
            </div>


            <!-- Reportes -->  
        <div class="element-slidebar">
            <div class="element-slidebar-btn">
                <span><img src="{{asset('img/Reportes.png')}}" alt="Reportes"></span>
                <p>Reportes</p>
            </div>
            <div class="element-slidebar-content">         
                <a href="">Reportes de inventarios</a>
                <a href="">Reportes de movimientos</a>
            </div>     
        </div>
    </aside>
    <!-- main -->
     <main class="main">
        <!-- header -->

        <header class="header">
            <h2>dasboard</h2>
            <button id="menu-toggle" class="menu-hamburger">☰</button>
        </header>

        <!-- Aqui se colocan todos los elementos cambiantes -->
        @yield('contenido')

     </main>
     <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
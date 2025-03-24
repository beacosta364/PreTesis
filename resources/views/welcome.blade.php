<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABY</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles landing page -->
        <link rel="stylesheet" href="{{ asset('css/styles-welcome.css') }}">


<!--  -->
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Administración</a>

                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a> -->
                        @endif
                    @endauth
                </div>
            @endif



             <!-- Contenedor para el video y el texto -->
        <section class="contenedor-header">
            <!-- Video  -->
            <section class="contenedor-video">
                <video id="myVideo"  autoplay muted playsinline>  <!--controls**para añadir los controles de video -->
                    <source src="img2/ABYStart.mp4" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>
            </section>

            <!-- Texto  -->
            <section class="contenedor-texto-header">
                <h1>ABY technological solutions</h1>
                <h2>Gestión eficiente, resultados visibles.</h2>
                <a href="#servicios"> Nuestros servicios</a>
            </section>
        </section>
        </div>


<!-- ////////////////////////////////////////////////////////////////servicios//////////////////////////////////////////////////////////////// -->
             <!-- Servicios -->
    <section id="servicios" class="servicios">
        <h2>Nuestros servicios</h2>
        <div class="servicios-grid">
            <div class="servicio">
                <img src="img2/Producto1.jpeg" alt="servicio">
                <h3>Control de acceso RFID</h3>
                <a href="#control-acceso-rfid"><button class="btn">Descripción</button></a>
            </div>
            <div class="servicio">
                <img src="img2/Producto2.jpeg" alt="servicio">
                <h3>Paginas web</h3>
                <a href="#paginas-web"><button class="btn">Descripción</button></a>
            </div>
            <div class="servicio">
                <img src="img/IOTinicio.png" alt="servicio">
                <h3>IOT</h3>
                <a href="#IOT"><button class="btn">Descripción</button></a>
            </div>
            <div class="servicio">
                <img src="img/GestionDeInventario.png" alt="servicio">
                <h3>Gestion de inventarios</h3>
                <a href="#gestion-de-inventarios"><button class="btn">Descripción</button></a>
            </div>
        </div>
    </section>
        </div>

<!-- ////////////////////////////////////////////////////////////////descripcion de servicios//////////////////////////////////////////////////////////////// -->
<!-- Descripcion de servicios -->
<section class="contenedor-servicios">
    <h2 class="titulo">Descripcion de nuestros servicios</h2>

    <div>
        <img class="img-acceso-RFID" src="img2/Producto1.jpeg" alt="Control de acceso RFID">
        <div class="contenido-texto">
            <h3 id="control-acceso-rfid">Control de acceso RFID</h3>
            <p>Imagina un entorno donde solo las personas autorizadas
                pueden acceder a áreas clave de tu empresa, donde la seguridad 
                y la eficiencia se fusionan para proteger tus recursos más 
                valiosos. Con la tecnología RFID, puedes controlar el acceso 
                a tus instalaciones de manera discreta pero efectiva, 
                manteniendo un registro detallado de cada movimiento. 
                No es solo seguridad, es una gestión inteligente que se 
                adapta a las necesidades de tu organización, brindándote 
                tranquilidad y control en un solo sistema.</p>
        </div>
    </div>
    
    <div>
        <img class="img-acceso-RFID" src="img2/Producto2.jpeg" alt="Control de acceso RFID">
        <div class="contenido-texto">
            <h3 id="paginas-web">Paginas web</h3>
            <p>Un sitio web bien diseñado es esencial para conectar con tus clientes 
                y destacar en el mercado digital. Creamos páginas web visualmente a
                tractivas y funcionales, optimizadas para una navegación fluida y 
                una experiencia de usuario excepcional. Desde el diseño hasta la 
                funcionalidad, cada detalle está pensado para impulsar tu presencia 
                en línea y potenciar tu negocio.</p>
        </div>
    </div>

    <div>
        <img class="img-acceso-RFID" src="img/IOTinicio.png" alt="Control de acceso RFID">
        <div class="contenido-texto">
            <h3 id="IOT">IOT</h3>
            <p>La solución de software desarrollada por la empresa 
                integra la gestión empresarial con tecnología IoT, 
                permitiendo a los usuarios monitorear y controlar sus 
                sistemas en tiempo real desde cualquier ubicación. 
                Diseñado para ser adaptable y seguro, el programa 
                optimiza la eficiencia y facilita la toma de decisiones, 
                asegurando que las empresas estén preparadas para el futuro..</p>
        </div>
    </div>

    <div>
        <img class="img-acceso-RFID" src="img/GestionDeInventario.png" alt="Control de acceso RFID">
        <div class="contenido-texto">
            <h3 id="gestion-de-inventarios">Gestion de inventarios</h3>
            <p>El software de Gestión de Inventarios permite a las empresas controlar 
                y optimizar sus productos en tiempo real. Con funciones como alertas 
                automáticas , este programa mejora la eficiencia operativa y asegura 
                un manejo preciso del inventario, adaptándose a las necesidades 
                específicas de cada negocio.</p>
        </div>
    </div>

 </section>
<!-- ////////////////////////////////////////////////////////////////footer//////////////////////////////////////////////////////////////// -->
        <footer>
            <p>&copy;2024 ABY technological solutions. Todos los derechos reservados </p>
            <div class="footer-links">
                <a href="">Politica de Privacidad</a>
                <a href="">Terminos y condiciones</a>
                <a href="https://wa.me/523167245788">Contacto</a>
     
            </div>
        </footer>


        <head>
    </head>

    </body>
</html>
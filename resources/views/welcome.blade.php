<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABY</title>

        <!-- Site Icons -->
        <link rel="shortcut icon" href="{{ asset('homeimg/Logocompleto.png') }}" type="Aplicativo ABY" />
        <link rel="apple-touch-icon" href="{{ asset('homeimg/homeimghomeimg.png') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}">
        <!-- Site CSS -->
        <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
        <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="{{ asset('css/home/colors/orange.css') }}" />

        <!-- Modernizer -->
        <script src="{{ asset('js/home/modernizer.js') }}"></script>


<!--  -->
    </head>
    <body class="antialiased">
       
    <div id="loader">
            <div id="status"></div>
        </div>
        <div id="site-header">
            <header id="header" class="header-block-top">
                <div class="container">
                    <div class="row">
                        <div class="main-menu">
                            <!-- Barra de Navegacion -->
                            <nav class="Barra de navegacion-default" id="mainNav">
                                <div class="navbar-header">
                                    <div class="logo">
                                        <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                            <img src="{{ asset('homeimg\LogoLaPapa.png') }}" alt="LogoLaPapa" width="100" height="50">
                                        </a>
                                    </div>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#banner">Inicio</a></li>
                                        <li><a href="#sobreNosotros">Sobre Nosotros</a></li>
                                        <li><a href="#menu">Menu</a></li>
                                        <li><a href="#reserva">Reserva</a></li>
                                        <li><a href="#contactenos">Contactanos</a></li>
                                        <li><a href="{{ route('login') }}">Administración</a></li>
                                    </ul>
                                </div>
                            
                            </nav>
                            <!-- end Barra de Navegacion-->
                        </div>
                    </div>
                    
                </div>
                
            </header>
        
        </div>

        <div id="banner" class="pantallaCompletaBanner banner">
            <div class="container pr">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-static">
                        <div class="banner-text">
                            <div class="banner-cell">
                                <h1>Ofreciendo el Mejor <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Sabor" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                                <h2>44 Años en Cali</h2>
                                <p>Date el gusto de conocernos</p>
                                <div class="book-btn">
                                    <a href="#reserva" class="table-btn hvr-underline-from-center">Reservar mi mesa</a>
                                </div>
                                <a href="#about">
                                    <div class="mouse"></div>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div> 
                    
                </div>
                
            </div>
            
        </div>
        <!-- end banner -->

        <div id="about" class="about-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title"> Sobre Nosotros </h2>
                            <h3>Restaurante La Papa</h3>
                            <p> Misión </p>
                            <p>En el restaurante La Papa, estamos comprometidos a ofrecer una experiencia culinaria excepcional
                                que celebra la diversidad de la cocina internacional. 
                                Nos esforzamos por utilizar ingredientes de la más alta calidad y brindar un servicio amable y eficiente, 
                                creando un ambiente acogedor donde cada cliente se sienta especial. 
                                Nuestro objetivo es deleitar a nuestros comensales con platos innovadores y tradicionales, 
                                destacando especialmente nuestras especialidades en papas y carnes, y ofreciendo opciones para todos los gustos, 
                                incluyendo vegetarianos y amantes de la comida árabe.
                            </p>
                                
                                <p>Visión </p>

                                <p>Ser reconocidos como el restaurante líder en Cali por nuestra dedicación a la excelencia culinaria y el servicio al cliente.
                                    Aspiramos a expandir nuestra presencia y ser un referente en la gastronomía internacional, 
                                    manteniendo siempre nuestro compromiso con la calidad y la satisfacción del cliente. 
                                    Queremos que cada visita a La Estación De La Papa sea una experiencia memorable, donde la tradición y la innovación se encuentren en cada plato, 
                                    y donde cada cliente se sienta parte de nuestra familia. </p>
                                
                        </div>
                    </div>

                    <!--Col-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="about-images">
                                <img class="about-main" src="{{ asset('homeimg/Platos/2991.jpg') }}" alt="ImageSobreNosotros">
                                <img class="about-inset" src="{{ asset('homeimg/Platos/2992.jpg') }}" alt="Sobre NosotrosRestaurante">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        <div class="special-menu pad-top-100 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title color-white text-center"> Nuestro Menu Especial </h2>
                            <h5 class="title-caption text-center">Ven a nuestro restaurante y déjate sorprender por nuestros exquisitos platos. No pierdas la oportunidad de deleitarte con nuestras delicias. ¡Te esperamos con los brazos abiertos!</h5>
                        </div>
                        <div class="special-box">
                            <div id="owl-demo">
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                COSTILLA CON PAPA CRIOLLA 
                                                <div class="line"></div>
                                                <div class="dit-line">Deliciosas costillas, tiernas y jugosas. Acompañadas de papas crujientes y doradas.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg\Costilla BBQ.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                PLATO MIXTO
                                                <div class="line"></div>
                                                <div class="dit-line"> Res, Pollo, Costilla, Chorizo.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg\Plato mixto..jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                SALMON  
                                                <div class="line"></div>
                                                <div class="dit-line">Acompañado de pure de papa y verduras frescas.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg\Salmon.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                TACOS DE CARNE  
                                                <div class="line"></div>
                                                <div class="dit-line">Tacos con carne molida y pico de gallo.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg\Tacos de carne.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                kIBBES
                                                <div class="line"></div>
                                                <div class="dit-line">Bolitas de carne y verduras</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg\Kibbes.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <!-- end special-menu -->

        <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                            Nuestro menu	
                        </h2>
                            <p class="title-caption text-center">En nuestro restaurante, nos enorgullecemos de ofrecer una experiencia culinaria única con una variedad de platos que deleitarán tu paladar.</p>
                        </div>
                        <div class="tab-menu">
                            <div class="slider slider-nav">
                                <div class="tab-title-menu">
                                    <h2>ENTRADAS</h2>
                                    <p> <i class="flaticon-canape"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>PLATO FUERTE</h2>
                                    <p> <i class="flaticon-dinner"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>POSTRES</h2>
                                    <p> <i class="flaticon-desert"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>BEBIDAS</h2>
                                    <p> <i class="flaticon-coffee"></i> </p>
                                </div>
                            </div>
                            <div class="slider slider-single">
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Empanaditas Arabes.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Empanadas Arabes</h3>
                                                <p>
                                                    Con salsa y guacamole.
                                                </p>
                                            </div>
                                            <span class="offer-price">$12Mil<l/span>
                                        </div>
                                    </div>                                    
                                    
                                   
                                    <div class="slider slider-single">
                                        <div>
                                            <div class="lg:w-1/2 md:w-1/2 sm:w-full px-4">
                                                <div class="offer-item bg-white shadow-lg rounded-lg p-4">
                                                    <img src="{{ asset('homeimg\Empanaditas vallunas.jpg') }}" alt="" class="w-full h-auto rounded-md">
                                                    <div>
                                                        <h3 class="text-xl font-semibold mt-4">Empanadas vallunas</h3>
                                                        <p class="text-gray-600">
                                                            Con Salsa y aji
                                                        </p>
                                                    </div>
                                                    <span class="offer-price text-lg font-bold text-green-600">$12Mil</span>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="lg:w-1/2 md:w-1/2 sm:w-full px-4">
                                                <div class="offer-item bg-white shadow-lg rounded-lg p-4">
                                                    <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="w-full h-auto rounded-md">
                                                    <div>
                                                        <h3 class="text-xl font-semibold mt-4">Ensalada Griega</h3>
                                                        <p class="text-gray-600">
                                                             Mix de ensalada.
                                                        </p>
                                                    </div>
                                                    <span class="offer-price text-lg font-bold text-green-600">$17Mil</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- end col -->
                                   
                                   
                                </div>
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Baby Beef</h3>
                                                <p>
                                                    Carne asada con el termino de tu preferencia.
                                                </p>
                                            </div>
                                            <span class="offer-price">$65Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pollo Galeto</h3>
                                                <p>
                                                    Pollo asado con papas a la francesa.
                                                </p>
                                            </div>
                                            <span class="offer-price">$60Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ajiaco,.  ..jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Ajiaco</h3>
                                                <p>
                                                    Tradicional ajiaco acompañado con arroz, aguacate y papas a la francesa.
                                                </p>
                                            </div>
                                            <span class="offer-price">$35Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pie de manzana..jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pie de manzana</h3>
                                                <p>
                                                     Postre para deleitar el paladar. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Deditos de chocolate</h3>
                                                <p>
                                                    Relleno de chocolate blanco.
                                                </p>
                                            </div>
                                            <span class="offer-price">$10Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pie de manzana.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Copa de helado</h3>
                                                <p>
                                                    Tu sabor preferido (Vainilla, Fresa, Caramelo)
                                                </p>
                                            </div>
                                            <span class="offer-price">$10</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\746d73efbc393b143870b08523e841b2.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3> Limonada</h3>
                                                <p>
                                                    De Coco, Cerezada o de mango.
                                                </p>
                                            </div>
                                            <span class="offer-price">$12Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\176582d05a265899763f7d1133eacae2.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Jugos naturales</h3>
                                                <p>
                                                    En agua, en leche o frappe. (Mango, Maracuya, Mora, Lulo)
                                                </p>
                                            </div>
                                            <span class="offer-price">$10Mil</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\7533046712e8ca1c98b07f576086dc4f.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Michelada</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <!-- end menu -->
        <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                        Nuestra Galeria
                    </h2>
                        <p class="title-caption text-center">Conoce un poco mas nuestros platos </p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="{{ asset('homeimg\Baby beef.jpg') }}"alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Baby Beef</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="{{ asset('homeimg\Papa Champiñon.jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Papa Champiñon.jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Papa con Champiñones</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="{{ asset('homeimg\Pechuga al carbon...jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Pechuga al carbon...jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Pechuga al carbon</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="{{ asset('homeimg\Pincho res...jpg') }}"  alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Pincho res...jpg') }}"  alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Pincho de res</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="{{ asset('homeimg\Pasta primavera.jpg') }}"  alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Pasta primavera.jpg') }}"  alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Pasta primavera</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="{{ asset('homeimg\Tacos de carne.jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Tacos de carne.jpg') }}"  alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Tacos de carne</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="{{ asset('homeimg\Salmon....jpg') }}"  alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Salmon....jpg') }}"  alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Salmon</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="{{ asset('homeimg\Plato mixto.jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Plato mixto.jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Plato mixto</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="{{ asset('homeimg\Pollo Galeto.jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Pollo Galeto.jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Pollo galeto</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="{{ asset('homeimg\Pechuga al carbon.jpg') }}" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset('homeimg\Pechuga al carbon.jpg') }}" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>Pechuga </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->
        
        <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="form-reservations-box">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h2 class="block-title text-center">
                            Reserva			
                        </h2>
                            </div>
                            <h4 class="form-title">FORMULARIO DE RESERVA <h4>
                            <p>POR FAVOR, RELLENE TODOS LOS CAMPOS OBLIGATORIOS*. ¡GRACIAS!</p>

                            <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="form_name" id="form_name" placeholder="Nombre:" required="required" data-error="El Nombre es requerido.">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="email" name="email" id="email" placeholder="E-mail:" required="required" data-error="E-mail es requerido.">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="phone" id="phone" placeholder="Telefono:">
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                            <option selected disabled>Numero de Personas</option>
                                            <option>1-2</option>
                                            <option>3-5</option>
                                            <option>5-10</option>
                                            <option>Mas de 10 personas.</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="date-picker" id="date-picker" placeholder="Fecha de reserva" required="required" data-error="Date is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="time-picker" id="time-picker" placeholder="Hora de reserva" required="required" data-error="Time is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="occasion" id="occasion" class="selectpicker">
                                            <option selected disabled>Decoracion</option>
                                            <option>Cumpleaños</option>
                                            <option>Aniversario</option>
                                            <option>Sin Decoracion</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="reserve-book-btn text-center">
                                        <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">RESERVAR MI MESA </button>
                                    </div>
                                </div>
                                
                            </form>
                            
                        </div>
                        
                    </div>
                
                </div>
                
            </div>
            
        </div>
        <!-- end reservacion -->

        <div id="footer" class="footer-main">
            <div class="footer-news pad-top-100 pad-bottom-70 parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <h2 class="ft-title color-white text-center"> Deja Tus Datos </h2>
                                <p> Envianos tu Numero de WhatsApp nos pondremos en contacto contigo.</p>
                            </div>
                            <form>
                                <input type="email" placeholder="Numero de WhatsApp">
                                <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                            </form>
                        </div>
                        
                    </div>
                
                </div>
            
            </div>
            <!-- end footer-news -->
            <div class="footer-box pad-top-70">
                <div class="container">
                    <div class="row">
                        <div class="footer-in-main">
                            <div class="footer-logo">
                                <div class="text-center">
                                    <img src="{{ asset('homeimg\Diseno_sin_titulo_(21).png') }}" alt="Logo/laPapa" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-a">
                                    <h3>Sobre Nosotros</h3>
                                    <p>Sigenos en nuestras redes sociales.</p>
                                    <ul class="socials-box footer-socials pull-left">
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-Instagram"></i></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="social-circle-border"><i class="fa fa-WhatsApp"></i></div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end footer-box-a -->
                            </div>
                            <!-- end col -->
                        
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-c">
                                    <h3>Contactanos</h3>
                                    <p>
                                        <i class="fa fa-map-signs" aria-hidden="true"></i>
                                        <span>Avenida 6ta # 23N-99 Cali- Colombia</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <span>
                                        +57 3167245788
                                    </span>
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span><a href="#">laPapa@gmail.com</a></span>
                                    </p>
                                </div>
                                <!-- end footer-box-c -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-box-d">
                                    <h3>Hora de Apertura</h3>

                                    <ul>
                                        <li>
                                            <p>Martes - Domingo</p>
                                            <span> 12:00 PM - 4:00 PM</span>
                                        </li>
                                        <li>
                                            <p>Horario extendido: Sabados </p>
                                            <span>  12:00 PM - 9:00 PM</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end footer-box-d -->
                            </div>
                        
                        </div>
                        
                    </div>
                    
                </div>
                
                <div id="copyright" class="copyright-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h6 class="copy-title"> Derechos de autor &copy; Todos los Derechos recervados 2025 ABY <a href="#" target="_blank"></a> </h6>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        
        <a href="#" class="scrollup" style="display: none;">Scroll</a>

        <!--  JS FILES -->
        <script src="{{ asset('js/home/all.js') }}"></script>
        <script src="{{ asset('js/home/bootstrap.min.js') }}"></script>
        <!-- ALL PLUGINS -->
        <script src="{{ asset('js/home/custom.js') }}"></script>

    </body>
</html>
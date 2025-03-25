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
                                <h1>Ofreciendo el Mejor <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Sabor:Servicio:Ambiente" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                                <h2>44 Años en Cali</h2>
                                <p>Date el Gusto de conocernos</p>
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
                            <p> Mision </p>
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
                                        <img src="{{ asset('homeimg/Platos/16002501.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                PASTA ITALIANA 
                                                <div class="line"></div>
                                                <div class="dit-line"> Sumérgete en el auténtico sabor de Italia con nuestra pasta al dente, bañada en una rica y cremosa salsa de tomate .</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg/Platos/16002505.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                FILETE CON CHAMPIÑONES 
                                                <div class="line"></div>
                                                <div class="dit-line">filete de res, cocinado a la perfección y acompañado de una cremosa salsa de champiñones.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg/Platos/16002510.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                SALMON 
                                                <div class="line"></div>
                                                <div class="dit-line">Salmon al ajillo.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg/Platos/16002513.jpg') }}" alt="sp-menu">
                                    </div>
                                </div>
                                <div class="item item-type-zoom">
                                    <a href="#" class="item-hover">
                                        <div class="item-info">
                                            <div class="headline">
                                                ROLLO DE CARNE
                                                <div class="line"></div>
                                                <div class="dit-line">Delicioso rollo de carne relleno de verduras salteadas y salsa carbonara</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-img">
                                        <img src="{{ asset('homeimg/Platos/2991.jpg') }}" alt="sp-menu">
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
                            Nuestro Menu 	
                        </h2>
                            <p class="title-caption text-center">Descripcion de nuestro menu. </p>
                        </div>
                        <div class="tab-menu">
                            <div class="slider slider-nav">
                                <div class="tab-title-menu">
                                    <h2>ENTRADAS</h2>
                                    <p> <i class="flaticon-canape"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>POSTRES</h2>
                                    <p> <i class="flaticon-dinner"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>CARNES</h2>
                                    <p> <i class="flaticon-desert"></i> </p>
                                </div>
                                <div class="tab-title-menu">
                                    <h2>PASTA</h2>
                                    <p> <i class="flaticon-coffee"></i> </p>
                                </div>
                            </div>
                            <div class="slider slider-single">
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/Platos/2992.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>ENTRADAS</h3>
                                                <p>
                                                    Lorem ipsum dolor sit ametr  mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$8.5</span>
                                        </div>
                                    </div>                                    <!-- filepath: /D:/laragon/www/PreTesis/resources/views/welcome.blade.php -->
                                    <div class="tab-title-menu">
                                        <h2 class="text-2xl font-bold">CARNES</h2>
                                        <p><i class="flaticon-desert"></i></p>
                                    </div>
                                    <div class="tab-title-menu">
                                        <h2 class="text-2xl font-bold">PASTA</h2>
                                        <p><i class="flaticon-coffee"></i></p>
                                    </div>
                                    <div class="slider slider-single">
                                        <div>
                                            <div class="lg:w-1/2 md:w-1/2 sm:w-full px-4">
                                                <div class="offer-item bg-white shadow-lg rounded-lg p-4">
                                                    <img src="{{ asset('homeimg/Platos/2992.jpg') }}" alt="" class="w-full h-auto rounded-md">
                                                    <div>
                                                        <h3 class="text-xl font-semibold mt-4">ENTRADAS</h3>
                                                        <p class="text-gray-600">
                                                            Lorem ipsum dolor sit ametr mollis eleifend dapibus.
                                                        </p>
                                                    </div>
                                                    <span class="offer-price text-lg font-bold text-green-600">$8.5</span>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="lg:w-1/2 md:w-1/2 sm:w-full px-4">
                                                <div class="offer-item bg-white shadow-lg rounded-lg p-4">
                                                    <img src="{{ asset('homeimg/menu-item-thumbnail-02.jpg') }}" alt="" class="w-full h-auto rounded-md">
                                                    <div>
                                                        <h3 class="text-xl font-semibold mt-4">MIXED SALAD</h3>
                                                        <p class="text-gray-600">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                        </p>
                                                    </div>
                                                    <span class="offer-price text-lg font-bold text-green-600">$25</span>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="lg:w-1/2 md:w-1/2 sm:w-full px-4">
                                                <div class="offer-item bg-white shadow-lg rounded-lg p-4">
                                                    <img src="{{ asset('homeimg/menu-item-thumbnail-03.jpg') }}" alt="" class="w-full h-auto rounded-md">
                                                    <div>
                                                        <h3 class="text-xl font-semibold mt-4">BBQ</h3>
                                                        <p class="text-gray-600">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                        </p>
                                                    </div>
                                                    <span class="offer-price text-lg font-bold text-green-600">$10</span>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-02.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>MIXED SALAD</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$25</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-03.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>BBQ </h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
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
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-04.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>PIZZA</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$5</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-05.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>POLLO</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$15</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-06.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>PASTA</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$6</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-07.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>CHOCOLATE</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$4</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-08.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>RES</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$9</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-09.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>COSTILLAS</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
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
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-10.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3> PIZZA</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$12</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-09.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>PASTA</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$9</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg/menu-item-thumbnail-08.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>POSTRE</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.
                                                </p>
                                            </div>
                                            <span class="offer-price">$5</span>
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
                                        <input type="text" name="date-picker" id="date-picker" placeholder="Descripcion" required="required" data-error="Date is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="time-picker" id="time-picker" placeholder="Tiempo Aproximado" required="required" data-error="Time is required." />
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="preferred_food" id="preferred_food" class="selectpicker">
                                            <option selected disabled>Detalle</option>
                                            <option>Cena</option>
                                            <option>Postre</option>
                                            <option>Entradas</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <select name="occasion" id="occasion" class="selectpicker">
                                            <option selected disabled>Ocacion</option>
                                            <option>Boda</option>
                                            <option>Cumpleaños</option>
                                            <option>Aniversario</option>
                                            <option>Otro</option>
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
                                <p> Envianos tu E-mail nos pondremos en contacto contigo.</p>
                            </div>
                            <form>
                                <input type="email" placeholder="E-mail">
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
                                        +57 
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
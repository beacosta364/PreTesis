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
                                        <li><a href="#about">Sobre Nosotros</a></li>
                                        <li><a href="#menu">Menu</a></li>
                                        <li><a href="#reservation">Reserva</a></li>
                                        <li><a href="#footer">Contactanos</a></li>
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
                            <h3>BIENVENIDOS A LA PAPA</h3>
                            <!-- <p> Misión </p> -->
                            <!-- <p>En el restaurante La Papa, estamos comprometidos a ofrecer una experiencia culinaria excepcional
                                que celebra la diversidad de la cocina internacional. 
                                Nos esforzamos por utilizar ingredientes de la más alta calidad y brindar un servicio amable y eficiente, 
                                creando un ambiente acogedor donde cada cliente se sienta especial. 
                                Nuestro objetivo es deleitar a nuestros comensales con platos innovadores y tradicionales, 
                                destacando especialmente nuestras especialidades en papas y carnes, y ofreciendo opciones para todos los gustos, 
                                incluyendo vegetarianos y amantes de la comida árabe.
                            </p> -->
                            <p>El 1 de diciembre del año 1980 abrimos nuestro restaurante en la ciudad de Cali, 
                                La Estacion De La papa <br>
                                El nombre fue escogido como tributo al alimento más noble de la cocina universal.
                                <br>
                                La magia de nuestras cocineras, la calidad de nuestros ingredientes, 
                                y el amable servicio de nuestro personal son los valores que hacen de nuestro 
                                restaurante "La Papa", algo inolvidable. 
                                <br>
                                Siéntase cómodo, tómese una copa de vino y disfrute de nuestra gastronomía.
                                <br>
                                Estaremos siempre comprometidos a hacer Lo que sea por el sabor.
                            </p>


                            <H3>ADVERTENCIA PROPINA:</H3>
                            <p>
                                Se informa a los consumidores que este establecimiento de comercio sugiere a sus 
                                consumidores una propina correspondiente al 10% del valor de la cuenta, el cual 
                                podrá ser aceptado, rechazado o modificado por usted, de acuerdo con su valoración 
                                del servicio prestado. Al momento de solicitar la cuenta, indíquele a la persona que 
                                lo atiende si quiere que dicho valor sea o no incluido en la factura o indíquele el 
                                valor que quiere dar como propina.
                                <br>
                                En este establecimiento de comercio los dineros recogidos por concepto de propina se 
                                reparten al 100% entre los trabajadores del área de servicios.
                                <br>
                                En caso de que tenga algún inconveniente con el cobro de la propina, comuníquese con 
                                la Línea exclusiva dispuesta en Bogotá para atender las inquietudes sobre el tema: 6513240, 
                                o a la Línea de Atención al Ciudadano de la Superintendencia de Industria y Comercio: 5920400, 
                                en Bogotá o para el resto del país Línea Gratuita Nacional: 018000-910165, para que radique su queja.
                            </p>
                            <H3>ADVERTENCIA INC:</H3>
                            <p>
                                TODOS NUESTROS PRECIOS INCLUYEN EL 8% DEL INC
                            </p>
                                <!-- <p>Visión </p>

                                <p>Ser reconocidos como el restaurante líder en Cali por nuestra dedicación a la excelencia culinaria y el servicio al cliente.
                                    Aspiramos a expandir nuestra presencia y ser un referente en la gastronomía internacional, 
                                    manteniendo siempre nuestro compromiso con la calidad y la satisfacción del cliente. 
                                    Queremos que cada visita a La Estación De La Papa sea una experiencia memorable, donde la tradición y la innovación se encuentren en cada plato, 
                                    y donde cada cliente se sienta parte de nuestra familia. 
                                </p> -->
                                
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
<!-- /****************************************************************************************************************************** */ -->
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
                                    
                                </div>
                                <!-- Entradas -->
                                <!-- <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Empanaditas Arabes.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3> Empanaditas arabes</h3>
                                                <p>
                                                    De Coco, Cerezada o de mango.
                                                </p>
                                            </div>
                                            <span class="offer-price">$12Mil</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Empanaditas vallunas.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cebiche de Camaron</h3>
                                                <p>
                                                    En agua, en leche o frappe. (Mango, Maracuya, Mora, Lulo)
                                                </p>
                                            </div>
                                            <span class="offer-price">$10Mil</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cebiche Cartagenero</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cascaritas</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cascaritas sicilianas</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cascaritas mediterraneas</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Frito mixto de mariscos</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Empanaditas arabes</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Kibbe</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Tahine con garbanzo</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Ensalada Griega.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Tahine con berenjena</h3>
                                                <p>
                                                    Cerveza de tu preferencia con maracuya y  mango. 
                                                </p>
                                            </div>
                                            <span class="offer-price">$15Mil</span>
                                        </div>
                                    </div>
                                    
                                </div> -->
                                


                                <!-- PLATOS FUERTES -->
                                <div>
                                    <p>-----------------------------Sopas----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Sopa de tomate</h3>
                                                <p>
                                                    Sopa de tomates frescos, aguacate, albahaca fresca y moneditas de plátano verde.
                                                </p>
                                            </div>
                                            <span class="offer-price">$30.7k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Sopa de pollo</h3>
                                                <p>
                                                    Con verduras frescas.
                                                </p>
                                            </div>
                                            <span class="offer-price">$30.7k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cazuela de corvina</h3>
                                                <p>
                                                    Cazuela con trositos de corvina asados.
                                                </p>
                                            </div>
                                            <span class="offer-price">$65.6k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cazuela de camarón</h3>
                                                <p>
                                                    Leche de coco y camarones salteados.
                                                </p>
                                            </div>
                                            <span class="offer-price">$70.3k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Frijolada</h3>
                                                <p>
                                                    Frijoles caseros, acompañados de arroz, carne o pollo o costilla, patacón, aguacate.
                                                </p>
                                            </div>
                                            <span class="offer-price">$65.8k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Ajiaco</h3>
                                                <p>
                                                    Tradicional sopa a base de variedad de papas, especiada con el sabor de la guasca. 
                                                    Aguacate, mazorca y pollo acompañan.
                                                    Crema y alcaparras opcionales
                                                </p>
                                            </div>
                                            <span class="offer-price">$65.6k</span>
                                        </div>
                                    </div>
                                    <p>-----------------------------Ensaladas----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Turca</h3>
                                                <p>
                                                    Lechuga, pepino, tomate, cebolla, aderezo.
                                                </p>
                                            </div>
                                            <span class="offer-price">$32.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Napolitana</h3>
                                                <p>
                                                    Motzzarella, tomate, aceitunas, albahaca, aceite de oliva, cebolla.
                                                </p>
                                            </div>
                                            <span class="offer-price">$43.1k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Sophia loren</h3>
                                                <p>
                                                    Rodajas de tomate, mozzarella, aceite de oliva, albahaca fresca.
                                                </p>
                                            </div>
                                            <span class="offer-price">$38.6k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Griega</h3>
                                                <p>
                                                    Lechuga, pepino, tomate, aceitunas negras, queso feta, pimentones, vinagreta.
                                                </p>
                                            </div>
                                            <span class="offer-price">$53.4k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Berenjenas italianasa</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$39.3k</span>
                                        </div>
                                    </div>
                                    <p>-----------------------------Papas----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Sour Cream</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$46.4k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cheddar</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$49.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Gulash</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$49.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pollo oriental</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$49.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Papa chile</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$49.9k</span>
                                        </div>
                                    </div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Papa Champiñon</h3>
                                                <p>
                                                    Encurtidas con especias mediterraneas, acompañadas con pan arabe.
                                                </p>
                                            </div>
                                            <span class="offer-price">$49.9k</span>
                                        </div>
                                    </div>
                                    <p>-----------------------------CARNES + AVES----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Las mejores costillas del mundo</h3>
                                                <p>
                                                    Tiernas costillas de cerdo, asadas al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$89.6k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>1/2 costilla</h3>
                                                <p>
                                                    Tiernas costillas de cerdo, asadas al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$61.2k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Baby Beef</h3>
                                                <p>
                                                    Centro de filete de res abierto, asado al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$88.1k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>1/2 Baby Beef</h3>
                                                <p>
                                                    Centro de filete de res abierto, asado al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$61.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Baby Beef encebollado</h3>
                                                <p>
                                                    Centro de filete de res abierto, asado al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$91.7k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>1/2 Baby Beef encebollado</h3>
                                                <p>
                                                    Centro de filete de res abierto, asado al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$66.7k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Churrasco</h3>
                                                <p>
                                                    Asado al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$73.8k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Miti/miti</h3>
                                                <p>
                                                    Media costilla, medio baby beef.
                                                </p>
                                            </div>
                                            <span class="offer-price">$92.9k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Gran asado la papa</h3>
                                                <p>
                                                    Media costilla, medio baby beef, chorizo, medio pollo galeto.
                                                </p>
                                            </div>
                                            <span class="offer-price">$121.5k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Baby beef.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Medallones a la pimienta</h3>
                                                <p>
                                                    Medallones de filete de res asados al carbón con salsa a la pimienta.
                                                </p>
                                            </div>
                                            <span class="offer-price">$85.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pollo Galeto</h3>
                                                <p>
                                                    Pollo tierno asado al carbón, marinado en salsa BBQ.
                                                </p>
                                            </div>
                                            <span class="offer-price">$65.8k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>1/2 Pollo Galeto</h3>
                                                <p>
                                                    Pollo tierno asado al carbón, marinado en salsa BBQ.
                                                </p>
                                            </div>
                                            <span class="offer-price">$47.6k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pechuga al carbón</h3>
                                                <p>
                                                    Pechuga de pollo con pimientos asados al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$53.4k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pechuga al carbón con Champiñones</h3>
                                                <p>
                                                    Pechuga de pollo con pimientos asados al carbón.
                                                </p>
                                            </div>
                                            <span class="offer-price">$63.5k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Plato mixto</h3>
                                                <p>
                                                    Pincho de carne, pincho de pollo, costilla, chorizo ahumado, empanadas, arepa y ají.
                                                </p>
                                            </div>
                                            <span class="offer-price">$63.5k</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Picada de costilla</h3>
                                                <p>
                                                    Trosos de costilla en salsa BBQ.
                                                </p>
                                            </div>
                                            <span class="offer-price">$69.2k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pincho de carne</h3>
                                                <p>
                                                    Acompañado con arepa de maiz.
                                                </p>
                                            </div>
                                            <span class="offer-price">$59K</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pincho de Pollo</h3>
                                                <p>
                                                    Acompañado con papa cheddar+brócoli.
                                                </p>
                                            </div>
                                            <span class="offer-price">$48.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Beefy</h3>
                                                <p>
                                                    Lomo de res asado al carbón sobre arepa de maíz, tomate picado, lechuga, salsa garlic.
                                                </p>
                                            </div>
                                            <span class="offer-price">$61.9k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Beefy chili</h3>
                                                <p>
                                                    Nuestro famoso beefy, acompañados de un tazón de frijoles con carne al estilo mexicano.
                                                </p>
                                            </div>
                                            <span class="offer-price">$70.3k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Fajitas de carne</h3>
                                                <p>
                                                    Carne picada, frijol refrito, tomate, guacamole en tortilla mexicana.
                                                </p>
                                            </div>
                                            <span class="offer-price">$51.1k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Fajitas de pollo</h3>
                                                <p>
                                                    Pollo picado, frijol refrito, tomate, guacamole en tortilla mexicaba.
                                                </p>
                                            </div>
                                            <span class="offer-price">$48.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Taco de carne</h3>
                                                <p>
                                                    Tostadas mexicanas con carne molida, lechuga, tomate, cebolla y guacamole.
                                                </p>
                                            </div>
                                            <span class="offer-price">$53.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pinchos kafta</h3>
                                                <p>
                                                    Carne molida con especias arabes, acompañadas con humus y ensalada turca.
                                                </p>
                                            </div>
                                            <span class="offer-price">$55.6k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Sahara</h3>
                                                <p>
                                                    Arroz con almendras tostadas y pollo, tahine con garbanzo, kibbes, pincho kafta y ensalada turca.
                                                </p>
                                            </div>
                                            <span class="offer-price">$70.3k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <p>-----------------------------PESCADOS + MARISCOS----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Corvina a la plancha</h3>
                                                <p>
                                                    Filete de corvina asado.
                                                </p>
                                            </div>
                                            <span class="offer-price">$102.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Corvina muenier</h3>
                                                <p>
                                                    Acite de oliva, mantequilla, vino blanco, limón y perejil.
                                                </p>
                                            </div>
                                            <span class="offer-price">$104.8kk</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Corvina con champiñones frescos</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$104.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Corvina a la pimienta</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$104.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Deditos de corvina</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Atún a la brasa</h3>
                                                <p>
                                                    Filete fresco de atún asado al carbón en aceite de oliva y pimienta en grano.
                                                </p>
                                            </div>
                                            <span class="offer-price">$89.3k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Salmón a la brasa</h3>
                                                <p>
                                                    Filete de salmón asado al carbón en salsa de eneldo.
                                                </p>
                                            </div>
                                            <span class="offer-price">$102.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Cazuela de langostinos</h3>
                                                <p>
                                                    Leche de coco y langostinos U12 salteados
                                                </p>
                                            </div>
                                            <span class="offer-price">$97.5kk</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pincho hawallano</h3>
                                                <p>
                                                    Langostinos U12 asados a la parrilla en pincho con trozos de piña y salsa de la casa. Acompaña arroz con coco.
                                                </p>
                                            </div>
                                            <span class="offer-price">$102.1k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Trucha almendrada</h3>
                                                <p>
                                                    Con ensalada turca + acompañamiento.
                                                </p>
                                            </div>
                                            <span class="offer-price">$63.5k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Langostinos a la muenier</h3>
                                                <p>
                                                    Langostinos U12 con ensalada turca + acompañamiento
                                                </p>
                                            </div>
                                            <span class="offer-price">$104.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Langostinos mariposa</h3>
                                                <p>
                                                    Langostinos U12 apanados, acompañados de ensalada turca + acompañamiento.
                                                </p>
                                            </div>
                                            <span class="offer-price">$104.8k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <p>-----------------------------SPAGHETTI----------------------------------</p>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Primavera</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pesto</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Abril 23</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pomodoro</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pollo Galeto,.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Napolitana</h3>
                                                <p>
                                                    
                                                </p>
                                            </div>
                                            <span class="offer-price">$54.4k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- POSTRES -->
                                <div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Helado de caramelo</h3>
                                                <!--<p>
                                                    Tu sabor preferido (Vainilla, Fresa, Caramelo)
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Flan</h3>
                                                <!-- <p>
                                                    Tu sabor preferido (Vainilla, Fresa, Caramelo)
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pie de manzana..jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Brownie con helado</h3>
                                                <!-- <p>
                                                    Postre para deleitar el paladar. 
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Postre de deditos</h3>
                                                <!-- <p>
                                                    Relleno de chocolate blanco.
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Pastel de manzana</h3>
                                                <!-- <p>
                                                    Relleno de chocolate blanco.
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Postre de deditos.jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Merengón</h3>
                                                <!-- <p>
                                                    Relleno de chocolate blanco.
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$22.7k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="{{ asset('homeimg\Pie de manzana..jpg') }}" alt="" class="img-responsive">
                                            <div>
                                                <h3>Copa de helado</h3>
                                                <!-- <p>
                                                    Tu sabor preferido (Vainilla, Fresa, Caramelo)
                                                </p> -->
                                            </div>
                                            <span class="offer-price">$18.1k</span>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- BEBIDAS -->
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
<!-- /****************************************************************************************************************************** */ -->

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
                                        +57 3168468130
                                        +57 3154561081
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
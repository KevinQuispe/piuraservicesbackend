<!DOCTYPE html>
<html lang="Es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Servicios basicos">
    <meta name="keywords" content="Servicios Basiccos, Luz Agua, Telfonia">
    <meta name="author" content="Kevin Quispe Rojas">
    <title>Servicios Basicos Piura</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('welcome/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('welcome/vendor/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('welcome/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('welcome/css/creative.css')}}" rel="stylesheet">
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><b>Servicios Básicos Piura</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Información</a>
                    </li>
                    <li> 
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Galeria</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactanos</a>
                    </li>
                    <li>
                    @if (Route::has('login'))
                        @if (Auth::check())
                            <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="page-scroll"  href="{{ url('/login') }}">Login</a>
                        @endif
                    @endif
                    </li>
            
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">SERVICIOS BÁSICOS PIURA</h1>
               <!--  <h4>Servicio de matenieminto y reparación de Pcs, laptops e instalación de utilitarios, programas informaticos y contables</h4> -->
                <hr>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Información</a>
            </div>
        </div>
         
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-headin">SERVICIOS BÁSICOS PIURA</h2>
                    <hr class="light">
                    <h3 class="text-center text-justify">
                    Sistema web para gestionar la información de consulta de los servicios básicos de Luz, Agua y telefonía en la ciudad de Piura, dicha información es publica que generalmente se encuentra en los sitios web de las entidades y empresas que brindan dichos servicios básicos, nos estamos refiriendo a la entidad Prestadora de servicios EPS Grau S.A, la entidad del servicio de luz, Enosa, y las empresas de telefonía Movistar,Claro y Entel.   </h3>
                    <div class="form-group">
                        <br>
                    </div>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Servicios</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <h2 class="section-heading">Servicios Básicos Piura</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                    <h3 class="markservices"><a href="http://www.distriluz.com.pe/enosa/" title="Abrir página web" target="_blank">Servicio de Luz, Dristriluz (Enosa)</a></h3>
                     <img src=" {{ asset('welcome/img/servicios/enosa.png')}}" width="260" class="img-rounded">     
                    <p class="text-muted  text-justify form-group">
                    En nuestro sistema web gestionamos la información de consulta  que proporciona la empresa Enosa la cual dicha información de consulta se encuentra en la página web y alguna información que nos proporciona la empresa Enosa, la información en la que nos centramos y gestionamos es, la información referencial de contacto, información de trámites, pasos para hacer reclamos o solicitar algún servicio, y así  de esta manera la información esté  integrada y disponible en cualquier momento para los usuarios accediendo  a consultar mediante la aplicación móvil Piura Services.    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                         <h3 class="markservices"> <a href="https://epsgrau.pe/webpage/desktop/views/" title="Abrir página web" target="_blank">Servicio de agua EPS Grau S.A</a></h3>
                         <img src="{{asset('welcome/img/servicios/epsgrau.png')}}" width="260" class="img-rounded">
                        <p class="text-muted text-justify form-group text-responsive">
                        La información de consulta  que proporciona la empresa EPS GRAU S.A,  dicha información se encuentra  en su página web y alguna información que nos proporciona la entidad EPS GRAU SA., la información en la que nos centramos y gestionamos es, la información referencial de contacto, información de trámites, pasos para hacer reclamos o solicitar algún servicio, y así  de esta manera la información esté  integrada y disponible en cualquier momento para los usuarios accediendo  a consultar mediante la aplicación móvil Piura Services.  </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 class="markservices"> <a href="http://www.movistar.com.pe/" title="Abrir página web" target="_blank">Servicio de telefonía Movistar,Claro, Entel</a></h3>
                        <img src="{{ asset('welcome/img/servicios/telefonia.png')}}" width="260" class="img-rounded">
                        <p class="text-muted text-justify form-group">
                        En nuestro sistema web gestionamos la información de consulta  que proporciona las empresas de telefonía Movistar, Claro y Entel, la cual dicha información de consulta se encuentra en las páginas web y alguna información que nos proporcionan las empresas, la información en la que nos centramos y gestionamos es, la información referencial de contacto, información de trámites, pasos para hacer reclamos o solicitar algún servicio, y así  de esta manera la información esté  integrada y disponible en cualquier momento para los usuarios accediendo  a consultar mediante la aplicación móvil Piura Services.  </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h3 class="markservices">¿ Qué es web Scraping?</h3>
                        <img src="{{ asset('welcome/img/servicios/webscraping.png')}}" width="260" height="144" class="img-rounded">
                        <p class="text-muted text-center text-justify">
                         El web scraping es una técnica que sirve para extraer información de páginas web de forma automatizada. Si traducimos del inglés su significado vendría a significar algo así como “escarbar una web”. El web scraping consiste en obtener los datos, pero evidentemente estos datos los tendremos que usar para alguna finalidad. Es por ello que se tratara la información extraída de las páginas web las entidades y empresas que brindan la información de los servicios básicos en Piura y de esta manera disponer de dicha información en tiempo real en nuestro sistema web administrable.
                        </p>
                </div>
            </div>
      
        </div>
    </section>
  <aside class="bg-dark1" id="portfolio">
        <div class="container text-center">
            <div class="call-to-action">
            <b>
            <marquee scrollamount="5" width="40">&lt;&lt;&lt;</marquee>Descarga nuestra aplicación en la Google Play como Piura services<marquee scrollamount="5" direction="right" width="40">&gt;&gt;&gt;</marquee>
            </b> 
            </div>
        </div>
    </aside>
    <section class="no-padding" >
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-7">
                    <a href= "{{ asset('welcome/img/portfolio/fullsize/11.png') }}" class="portfolio-box">
                        <img src="{{ asset('welcome/img/portfolio/fullsize/11.png') }}" width="" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Descarga la app en google play
                                </div>
                                <div class="project-name">
                                      Piura services
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('welcome/img/portfolio/fullsize/22.png') }}" class="portfolio-box">
                        <img src="{{ asset('welcome/img/portfolio/thumbnails/22.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Entidades y empresas
                                </div>
                                <div class="project-name">
                                    Piura services 
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('welcome/img/portfolio/fullsize/33.png') }}" class="portfolio-box">
                        <img src="{{ asset('welcome/img/portfolio/thumbnails/33.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Fácil navegación en la aplicación 
                                </div>
                                <div class="project-name">
                                   Piura services
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>
        </div>
    </section>

    <aside class="bg-dark" id="contact">
        <div class="container text-center">
            <div class="call-to-action">
               <b> Escribenos a nuestra dirección de correo o llamanos y gustosamente te atenderemos,
                <mark>preguntar por Kevin Quispe</mark></b> 
            </div>
        </div>
    </aside>

    <section >
        <div class="container">
            <div class="row col-md-12">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <hr class="primary">
                    <p>Para poder solicitar uno de nuestros servicios, puedes comunicarte marcando cualquiera de los números telefónicos que aparecen en pantalla o enviarnos un email</p>
                </div>
                <div class="col-md-12">
                     <div class="col-md-4 col-md-offset text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>Fijo: 073-34-5606</p>
                    
                </div>
                <div class="col-md-4 col-md-offset text-center">
                    <i class="fa fa-mobile fa-3x sr-contact"></i>
                    <p>Cell: 934416164</p>

                </div>
                <div class="col-md-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>Email: <a href="mailto:your-email@your-domain.com">kquispe07@gmail.com</a></p>

                </div>
                </div>
                <div class="col-md-12 text-center col-md-offset">
                   <i class="fa fa-map-marker fa-3x sr-contact"></i>
                    <p class="col-md-12 col-md-offset"><mark>Dirección: Urb.15 de setiembre Castilla-Piura,Perú<mark></p>
                
                </div>
               
            </div>
        </div>
    </section>

 <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge footer">
<a href="https://www.facebook.com/kquisperojas" target="_blank"><i class="fa fa-facebook-official fa-2x w3-hover-opacity cambia" title="siguenos en facebook" ></i></a>
<a href="https://www.twitter.com/kquisperojas" target="_blank"><i class="fa fa-twitter w3-hover-opacity fa-2x cambia1" title="siguenos en twitter"></i></a>
<a href="" target=""><i class="fa fa-youtube w3-hover-opacity fa-2x cambia2" title="siguenos en youtube"></i></a>
  <p class="w3-medium">&copy Derechos Reservados 2018, KevinQR
      
</footer>

    <!-- jQuery -->
    <script src="{{ asset('welcome/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript lo descargue -->
    <script src="{{asset('welcome/vendor/jquery/jquery.easing.min.js')}}"></script>

    <script src="{{ asset('welcome/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript -->
    
    <script src="{{ asset('welcome/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    
    <script src= "{{ asset('welcome/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
   
    <script src="{{ asset('welcome/js/creative.min.js')}}"></script>

</body>

</html>

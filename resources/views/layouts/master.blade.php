<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Servicios Básicos-Piura</title>
    <!--<link rel="stylesheet" href="{{asset('bootstrap4/css/bootstrap.min.css')}}">-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('tema/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('tema/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('tema/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('tema/css/custom.css')}}">
</head>
<body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="{{ url('/home') }}" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Servicios Básicos </span><strong> Piura</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center">
                <a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <!-- Languages dropdown    -->
                @if (Auth::user()->rol_id == 1)
                <li class="nav-item dropdown">
                <a id="languages" rel="nofollow" data-target="#" href="{{ url('/home') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">
                <img src=""><span class="d-none d-sm-inline-block">Register</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                    <li><a rel="nofollow" href="{{ url('serviciospiura/usuarioempresa/create') }}" class="dropdown-item"> 
                    <img src="" class="mr-2">Registrar Usuario</a></li>
                  </ul>
                </li>
                @endif
                <!-- Logout    -->
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link logout"  
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                      <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
                  <!-- Logout    -->
             
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('tema/img/avatar-1.jpg')}}" class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ Auth::user()->name }}</h1>
              <p>Administrador Web</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Contenido</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="{{ url('/home') }}"><i class="icon-home"></i>Home</a></li>
                      <li><a href="#admin-info" aria-expanded="false" data-toggle="collapse">
                      <i class="icon-grid"></i>Admin Información</a>
                      <ul id="admin-info" class="collapse list-unstyled ">
                        @if (Auth::user()->rol_id == 1)
                          <li><a href="{{ url('serviciospiura/entidadepsgrau/listar') }}">Entidad Eps Grau</a></li>
                          <li><a href="{{ url('serviciospiura/entidadenosa/listar') }}">Entidad Enosa</a></li>
                          <li><a href="{{ url('serviciospiura/empresamovistar/listar') }}">Empresa Movistar</a></li>
                          <li><a href="{{ url('serviciospiura/empresaclaro/listar') }}">Empresa Claro</a></li>
                          <li><a href="{{ url('serviciospiura/empresaentel/listar') }}">Empresa Entel</a></li>
                        @elseif (Auth::user()->rol_id == 2)
                          <li><a href="{{ url('serviciospiura/entidadepsgrau/listar') }}">Entidad Eps Grau</a></li>
                        @elseif (Auth::user()->rol_id == 3)
                          <li><a href="{{ url('serviciospiura/entidadenosa/listar') }}">Entidad Enosa</a></li>
                        @elseif (Auth::user()->rol_id == 4)
                          <li><a href="{{ url('serviciospiura/empresamovistar/listar') }}">Empresa Movistar</a></li>
                        @elseif (Auth::user()->rol_id == 5)
                        <li><a href="{{ url('serviciospiura/empresaclaro/listar') }}">Empresa Claro</a></li>
                        @elseif (Auth::user()->rol_id == 6)
                        <li><a href="{{ url('serviciospiura/empresaentel/listar') }}">Empresa Entel</a></li>
                        @endif
                      </ul>
                    </li>
                    @if (Auth::user()->rol_id == 1)
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                    <i class="icon-interface-windows"></i>Admin Usuarios</a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ url('serviciospiura/usuarioempresa') }}">Listar Usuarios</a></li>
                      </ul>
                    </li>
                    @endif
          </ul>

          <span class="heading">Web Scraping</span>
          <ul class="list-unstyled">
            @if (Auth::user()->rol_id == 1)
              <li> <a href="{{url('serviciospiura/entidadepsgrau/scraping')}}"> <i class="icon-screen"></i>Web Scraping EPS Grau</a></li>
              <li> <a href="{{url('serviciospiura/entidadenosa/scraping')}}"> <i class="icon-screen"></i>Web Scraping Enosa</a></li>
              <li> <a href="{{url('serviciospiura/empresamovistar/scraping')}}"> <i class="icon-screen"></i>Web Scraping Movistar</a></li>
            @elseif (Auth::user()->rol_id == 2)
              <li> <a href="#"> <i class="icon-screen"></i>Web Scraping EPS Grau</a></li>
            @elseif (Auth::user()->rol_id == 3)
              <li> <a href="#"> <i class="icon-screen"></i>Web Scraping Enosa</a></li>
            @elseif(Auth::user()->rol_id==4)
              <li> <a href="#"> <i class="icon-screen"></i>Web Scraping Movistar</a></li>
            @elseif(Auth::user()->rol_id==5)
              <li> <a href="#"> <i class="icon-screen"></i>Web Scraping Claro</a></li>
            @elseif(Auth::user()->rol_id==6)
              <li><a href="#"> <i class="icon-screen"></i>Web Scraping Entel</a></li>
            @endif
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <!--<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>-->
          @yield('content')
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Servicios Básicos-Piura; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Development by <a href="https://twitter.com/kquisperojas" class="external"><b> KevinQR</b></a></p>
                  <!-- Please do not remove the backlink to us unless you support further themes development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JavaScript files-->
    <script src="{{ asset('tema/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('tema/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('tema/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('tema/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('tema/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('tema/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('tema/js/charts-home.js')}}"></script>
    <!-- Main File-->
    <script src="{{ asset('tema/js/front.js')}}"></script>
</body>
</html>

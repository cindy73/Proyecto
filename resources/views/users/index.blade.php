<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/now-ui-dashboard-pro" />


  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, now ui dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, now ui design, now ui dashboard bootstrap 4 dashboard">
  <meta name="description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">


  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Now Ui Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="[Now Ui Dashboard PRO] by Creative Tim">

  <meta name="twitter:description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg">


  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Now Ui Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/72/opt_nudp_thumbnail.jpg"/>
  <meta property="og:description" content="Now UI Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <title>
    Campeonato
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('assets') }}/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets') }}/demo/demo.css" rel="stylesheet" />

</head>
<body class="sidebar-mini clickup-chrome-ext_installed">
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <span class="simple-text logo-normal">
          {{ __('Opciones') }}
        </span>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
              <a data-toggle="collapse" href="#laravelExamples">
                  <i class="fab fa-asymmetrik"></i>
                <p>
                  {{ __("Equipo/Jugadores") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse show" id="laravelExamples">
                <ul class="nav">
                  <li >
                    <a href="">
                      <i class="fas fa-puzzle-piece"></i>
                      <p> {{ __("Ingresar equipos") }} </p>
                    </a>
                  </li>
                  <li class=" active">
                    <a href="">
                      <i class="fas fa-user-plus"></i>
                      <p> {{ __("Ingresar jugadores") }} </p>
                    </a>
                  </li>
                </ul>
              </div>
          <li >
            <a href="">
              <i class="fas fa-clock"></i>
              <p>{{ __('Horarios') }}</p>
            </a>
          </li>
          <li >
            <a href="">
              <i class="fas fa-handshake"></i>
              <p>{{ __('Ecuentros') }}</p>
            </a>
          </li>
          <li >
            <a href="">
              <i class="fas fa-signal"></i>
              <p>{{ __('Estadisticas') }}</p>
            </a>
          </li>
          <li class = "">
        <a href="">
          <i class="far fa-futbol"></i>
          <p>{{ __('Mostrar jugadores') }}</p>
        </a>
      </li>
        </ul>
      </div>
    </div><div class="main-panel">
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">{{ __("Cuenta") }}</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href=""
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Cerrar sesi??n') }}
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Navbar --> <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
        <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><i class="now-ui-icons business_badge"></i>
            {{__("Agregar jugador")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('post')
              @include('alerts.success')
              <div class="row">
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Nombres")}}</label>
                      <input type="text" name="nombresJ" placeholder="Ingrese los nombres" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("C??dula")}}</label>
                      <input type="text" name="cedulaJ" placeholder="Ingrese la cedula" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>{{__("Capitan")}}</label>
                        <select class="form-control form-select" required>
                          <option value="0">No aplica</option>
                          <option value="1">Asignar</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Apellidos")}}</label>
                        <input type="text" name="apellidoJ" class="form-control" required placeholder="Ingrese los apellidos">
                    </div>
                    <div class="form-group">
                        <label>{{__("Asignar equipo")}}</label>
                        <select class="form-control form-select" required>
                          <option class="form-control" value="1">Manchester City</option>
                        </select>
                    </div>

                  </div>
                </div>
              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Guardar')}}</button>
              </div>
              <hr class="half-rule"/>
            </form>
          </div>
          
      </div>
    </div>
    <!-- end row -->
  </div></div>                    </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets') }}/demo/demo.js"></script>
  @stack('js')
</body>

</html>

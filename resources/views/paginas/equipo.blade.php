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
          <li >
              <a data-toggle="collapse" href="#laravelExamples">
                  <i class="fab fa-asymmetrik"></i>
                <p>
                  {{ __("Equipo/Jugadores") }}
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse show" id="laravelExamples">
                <ul class="nav">
                  <li class="active">
                    <a href="{{ route('equipo.index') }}">
                      <i  class="fas fa-puzzle-piece"></i>
                      <p> {{ __("Ingresar equipos") }} </p>
                    </a>
                  </li>
                  <li >
                    <a href="{{ route('jugadores.index') }}">
                      <i class="fas fa-user-plus"></i>
                      <p> {{ __("Ingresar jugadores") }} </p>
                    </a>
                  </li>
                </ul>
              </div>
          <li >
            <a href="{{ route('horarios.index') }}">
              <i class="fas fa-clock"></i>
              <p>{{ __('Horarios') }}</p>
            </a>
          </li>
          <li >
            <a href="{{ route('encuentros.index') }}">
              <i class="fas fa-handshake"></i>
              <p>{{ __('Ecuentros') }}</p>
            </a>
          </li>
          <li >
            <a href="{{ route('estadisticas.index') }}">
              <i class="fas fa-signal"></i>
              <p>{{ __('Estadisticas') }}</p>
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
            <a class="dropdown-item" href="/">
              {{ __('Cerrar sesión') }}
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Navbar --> <div class="panel-header panel-header-sm">
  </div>
  <div class="content" style="background-image: url('{{ asset('assets/img/fut2.jpg') }}'); background-repeat: none; background-size: cover;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><i class="now-ui-icons location_bookmark"></i>
              {{__(" Crear nuevo equipo")}}
            </h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('equipo.store') }}" autocomplete="off" class="ingresarData" >
              @csrf
              @method('post')
              <div class="row">
              </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                        <label>{{__(" Nombre del equipo")}}</label>
                        <input type="text" name="nombredelequipo" class="form-control" required placeholder="Ingrese nombre del equipo">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Fecha de creacion")}}</label>
                      <input type="date" name="fechacreacion" class="form-control" required>

                    </div>
                  </div>
                  <div class="col-md-5">
                    <img src="{{ asset('assets/img/equipos.jpg') }}" alt="">
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
      <div class="col-md-2">
      </div>
    </div>

     <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h5 class="title"> <i class="now-ui-icons files_paper "></i>
            {{__("Equipos registrados")}}
            </h5>
          </div>
          <div class="card-body">
            <table id="datatable" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                  <th>
                    Nombre del equipo
                  </th>
                  <th>
                    Fecha de creación
                  </th>
                  <th>
                    Opciones
                  </th>
                </thead>
                <tbody>
                  @foreach($datos as $i )
                  <tr>
                    <td>
                      {{$i->nombre_equipo}}
                    </td>
                    <td>
                      {{$i->fecha_creacion}}
                    </td>
                    <td style="text-align:center;">
                      <form method="post" action="{{ route('equipo.destroy', $i->id_equipo) }}" class="eliminarE">
                       @csrf
                       @method('delete')
                       <a onclick="cargardatos('{{$i->id_equipo}}','{{$i->nombre_equipo}}','{{$i->fecha_creacion}}')" data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-icon btn-sm " >
                        <i class="far fa-edit"></i>
                      </a>
                      <button type="submit" class="btn btn-danger btn-icon btn-sm " >
                        <i class="far fa-trash-alt"></i>
                      </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('equipo.update',0) }}">
         @csrf
         @method('put')
        <div class="modal-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="form-group">
                        <label>{{__(" Nombre del equipo")}}</label>
                        <input id="nombredelequipoE" type="text" name="nombredelequipoE" class="form-control" autocomplete="off" required placeholder="Ingrese nombre del equipo">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Fecha de creacion")}}</label>
                      <input id="fechacreacionE" autocomplete="off" type="date" name="fechacreacionE" class="form-control" required>

                    </div>
                    <input id="idEquipo" name="idEquipo" type="hidden" >
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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

<!-- Alertas para el ingreso del equipo -->
@if(session('mensaje')=='ok')
  <script type="text/javascript">
    Swal.fire(
      'Equipo ingresado',
      'El equipo se ingreso correctamente.',
      'success'
      )
  </script>
@endif
@if(session('mensaje')=='existe')
  <script type="text/javascript">
    Swal.fire(
      'Equipo duplicado',
      'El equipo ya se encuentra registrado.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='no')
  <script type="text/javascript">
    Swal.fire(
      '¡Error!',
      'El equipo no fue registrado.',
      'error'
      )
  </script>
@endif
<!-- Alerta de eliminar -->
@if(session('mensaje')=='eliminado')
  <script type="text/javascript">
      Swal.fire(
        'Equipo eliminado',
        'El equipo se elimino correctamente.',
        'success'
      )
  </script>
@endif
@if(session('mensaje')=='NoEli')
  <script type="text/javascript">
      Swal.fire(
        'Equipo no eliminado',
        'El equipo no se puede eliminar porque cuenta con jugadores o encuentros.',
        'error'
      )
  </script>
@endif

<!-- Alerta de Editar -->
@if(session('mensaje')=='editado')
  <script type="text/javascript">
      Swal.fire(
        'Equipo editado',
        'El equipo se modifico correctamente.',
        'success'
      )
  </script>
@endif
@if(session('mensaje')=='ingreso')
  <script type="text/javascript">
    Swal.fire(
      '¡Bienvenido!',
      'El usuario y la contraseña son correctos.',
      'success'
      )
  </script>
@endif
  <script type="text/javascript">
    function cargardatos(id,nombre,fecha){
      document.getElementById("nombredelequipoE").value=nombre;
      document.getElementById("fechacreacionE").value=fecha;
      document.getElementById("idEquipo").value=id;
    }

    $(document).ready(function(event) {
      $('.eliminarE').submit(function(e){
        e.preventDefault();
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: '¿Desea eliminar el equipo?',
          text: "No podrás revertir la elección!",
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Si, eliminar',
          cancelButtonText: 'Cancelar',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            this.submit();
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Acción cancelda',
              'Su equipo no fue eliminado',
              'error'
            )
          }
        })
      });
    });
  </script>
  @stack('js')
</body>

</html>

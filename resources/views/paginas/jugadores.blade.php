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
                  <li >
                    <a href="{{ route('equipo.index') }}">
                      <i  class="fas fa-puzzle-piece"></i>
                      <p> {{ __("Ingresar equipos") }} </p>
                    </a>
                  </li>
                  <li class="active">
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
  <div class="content" style="background-image: url('{{ asset('assets/img/equi.jpg') }}'); background-repeat: none; background-size: cover;">
        <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><i class="now-ui-icons business_badge"></i>
            {{__("Agregar jugador")}}</h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('jugadores.store') }}" autocomplete="off"
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
                      <label for="exampleInputEmail1">{{__("Cédula")}}</label>
                      <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="cedulaJ" placeholder="Ingrese la cedula" class="form-control" required>
                    </div>
                    <div class="form-group" id="verC">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Apellidos")}}</label>
                        <input type="text" name="apellidoJ" class="form-control" required placeholder="Ingrese los apellidos">
                    </div>
                    <div class="form-group">
                        <label>{{__("Asignar equipo")}}</label>
                        <select class="form-control form-select" id="capitanV" name="idEquipo" required>
                        <option value="">--Elige una opción--</option>
                          @foreach($equipos as $item)
                          <option class="form-control" value="{{$item->id_equipo}}">{{$item->nombre_equipo}}</option>
                          @endforeach
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
    </div>

    <div class="row" >
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h5 class="title"> <i class="now-ui-icons files_paper"></i>
            {{__("Jugadores registrados")}}
            </h5>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                      <label>{{__("Selecionar equipo")}}</label>

                         <select id="equipos" class="form-control form-select" name="idEquipoM" required>
                         <option value="">--Elige un equipo--</option>
                           @foreach($equipos as $item)
                              <option class="form-control" value="{{$item->id_equipo}}">{{$item->nombre_equipo}}</option>
                            @endforeach
                          </select>
                    </div>


                </div>
            </div>
          </div>
          <div class="card-body">
            <table id="datatable" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                  <th>
                    Nombre del equipo
                  </th>
                  <th>
                    Nombre del jugador
                  </th>
                  <th>
                    Rol
                  </th>
                  <th>
                    Opciones
                  </th>
                </thead>
                <tbody>


                </tbody>
              </table>
          </div>
      </div>
    </div>
      <div class="col-md-1">
      </div>
    </div>
    <!-- end row -->
  </div></div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar jugador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('jugadores.update',0) }}" >
         @csrf
         @method('put')
        <div class="modal-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="form-group">
                        <label>{{__(" Nombres")}}</label>
                        <input id="nombredeljugadorE" type="text" name="nombredeljugadorE" class="form-control" autocomplete="off" required >

                    </div>
                    <div class="form-group">
                        <label>{{__(" Apellidos")}}</label>
                        <input id="apellidodeljugadorE" type="text" name="apellidodeljugadorE" class="form-control" autocomplete="off" required >

                    </div>
                    <div class="form-group">
                        <label>{{__(" Cedula")}}</label>
                        <input id="ceduladeljugadorE" type="text" name="ceduladeljugadorE" class="form-control" autocomplete="off" required>

                    </div>
                    <div class="form-group">
                        <label>{{__("Asignar equipo")}}</label>
                        <select class="form-control form-select" id="equipoV" name="idEquipo" required>
                        <option value="">--Elige una opción--</option>
                          @foreach($equipos as $item)
                          <option class="form-control"  value="{{$item->id_equipo}}">{{$item->nombre_equipo}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="verCE">

                    </div>
                    <input id="idjugador" name="idjugador" type="hidden" >
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
  <!-- Alertas para el ingreso del equipo -->
@if(session('mensaje')=='ok')
  <script type="text/javascript">
    Swal.fire(
      'Jugador registrado',
      'El jugador se registro correctamente.',
      'success'
      )
  </script>
@endif
@if(session('mensaje')=='repetido')
  <script type="text/javascript">
    Swal.fire(
      'Jugador duplicado',
      'El jugador ya se encuentra registrado.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='no')
  <script type="text/javascript">
    Swal.fire(
      '¡Error!',
      'El jugador no fue registrado.',
      'error'
      )
  </script>
@endif
<!-- Alerta de Editar -->
@if(session('mensaje')=='editado')
  <script type="text/javascript">
      Swal.fire(
        'Jugador editado',
        'El jugador se modifico correctamente.',
        'success'
      )
  </script>
@endif
@if(session('mensaje')=='repetidoUP')
  <script type="text/javascript">
    Swal.fire(
      'Jugador duplicado',
      'El jugador ya se encuentra registrado en este equipo.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='repetidoUP2')
  <script type="text/javascript">
    Swal.fire(
      'Jugador duplicado',
      'El jugador ya se encuentra registrado en un equipo.',
      'warning'
      )
  </script>
@endif


  <!--   Core JS Files   -->
  <script type="text/javascript">

  </script>
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
  <script>
    function cargardatos(id){
       var url= "{{url('jugadores')}}"+"/"+id;
        $.ajax({
          url:url,
          type: 'GET',
          dataType: 'json'
        })
        .done(function(data1) {
          document.getElementById("nombredeljugadorE").value=data1[0].nombres;
          document.getElementById("apellidodeljugadorE").value=data1[0].apellidos;
          document.getElementById("ceduladeljugadorE").value=data1[0].cedula;
          document.getElementById("equipoV").value=data1[0].id_equipo;
          document.getElementById("idjugador").value=data1[0].id_jugador;
          if(data1[0].capitan==1){
            $('#verCE').html("");
            var filatable2="";
              filatable2+=`<label>{{__("Capitan")}}</label>
                          <select class="form-control form-select" id="capi" name="capitanJE" required>
                            <option value="0">Quitar cargo</option>
                            <option value="1">Capitán actual</option>
                          </select>`;
            $('#verCE').html(filatable2);
            document.getElementById("capi").value=data1[0].capitan;
          }else{
            var url2= "{{url('Vcapitan')}}"+"/"+data1[0].id_equipo;
            $.ajax({
              url:url2,
              type: 'GET',
              dataType: 'json'
            })
            .done(function(data) {
              $('#verCE').html("");
              var filatable3="";
              if(data==0){
                filatable3+=`<label>{{__("Capitan")}}</label>
                            <select class="form-control form-select" id="capi" name="capitanJE" required>
                              <option value="0">No aplica</option>
                              <option value="1">Asignar</option>
                            </select>`;
              $('#verCE').html(filatable3);
              }

            })
            .fail(function(error) {
              console.log("error");
            })
          }


        })
        .fail(function(error) {
          console.log("error");
        })
    }


  function eliminar(id){
    const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: '¿Desea eliminar el Jugador?',
          text: "No podrás revertir la elección!",
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Si, eliminar!',
          cancelButtonText: 'Cancelar',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            var url2= "{{url('eli')}}"+"/"+id;
            $.ajax({
              url:url2,
              type: 'GET'
            })
            .done(function(data) {
              if(data==0){
                Swal.fire(
                  'Jugador no eliminado',
                  'El jugador no se puede eliminar porque pertenece a la tabla de goleadores.',
                  'error'
                )
              }else{
                $("#"+id).hide();
                Swal.fire(
                  'Jugador eliminado',
                  'El jugador se elimino correctamente.',
                  'success'
                )
              }
            })
            .fail(function(error) {
              console.log("error");
            })

          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Acción cancelda',
              'Su jugador no fue eliminado',
              'error'
            )
              }
            })

  }

    $(document).ready(function() {

      $('#equipos').change(function(event) {
        var id = $(this).val();
        var url= "{{url('cargarequipo')}}"+"/"+id;
        $.ajax({
          url:url,
          type: 'GET',
          dataType: 'json'
        })
        .done(function(data) {
          $('#datatable tbody').html("");
          var filatable="";
           for(i=0; i<data.length; i++){

              filatable+="<tr id='"+data[i].id_jugador+"'>";
              filatable+="<td>"+data[i].nombre_equipo+"</td>";
              filatable+="<td>"+data[i].nombres +" "+ data[i].apellidos +"</td>";
              if(data[i].capitan==0){
                filatable+=`<td style="text-align:center;">
                              <span class="badge badge-primary">Jugador</span>
                            </td>`;
              }else{
                filatable+=`<td style="text-align:center;">
                              <span class="badge badge-success">Jugador / Capitán</span>
                            </td>`;
              }

              filatable+=`<td style="text-align:center;">
                       <a onclick="cargardatos(`+data[i].id_jugador+`)" class="btn btn-success btn-icon btn-sm "  data-toggle="modal" data-target="#exampleModal">
                        <i class="far fa-edit"></i>
                      </a>
                      <button onclick="eliminar(`+data[i].id_jugador+`)" class="btn btn-danger btn-icon btn-sm " >
                        <i class="far fa-trash-alt"></i>
                      </button>
                    </td>`;
              filatable+="</tr>";

             }
           $('#datatable tbody').html(filatable);
        })
        .fail(function(error) {
          console.log("error");
        })

      });

      $('#capitanV').change(function(event){
        var id = $(this).val();
        var url= "{{url('Vcapitan')}}"+"/"+id;
        $.ajax({
          url:url,
          type: 'GET',
          dataType: 'json'
        })
        .done(function(data) {
          $('#verC').html("");
          var filatable="";
          if(data==0){
            filatable+=`<label>{{__("Capitan")}}</label>
                        <select class="form-control form-select" name="capitanJ" required>
                          <option value="0">No aplica</option>
                          <option value="1">Asignar</option>
                        </select>`;
          $('#verC').html(filatable);
          }

        })
        .fail(function(error) {
          console.log("error");
        })

      });



    });

  </script>
  @stack('js')
</body>

</html>

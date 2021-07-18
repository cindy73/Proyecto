<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

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
<body class="sidebar-mini clickup-chrome-ext_installed" >
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
          <li class="active">
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
  <div class="content" style="background-image: url('{{ asset('assets/img/encu.jpg') }}'); background-repeat: none; background-size: cover;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title"><i class="fab fa-openid"></i>
              {{__("Registrar encuentros")}}
            </h5>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('encuentros.store') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="row">

              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Equipo local")}}</label>
                        <select class="form-control form-select" name="local" required>
                        <option value="">--Equipo local--</option>
                          @foreach($equipos as $item)
                          <option class="form-control" value="{{$item->id_equipo}}">
                            {{$item->nombre_equipo}}</option>
                          @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{__("Horario")}}</label>
                        <select class="form-control" name="horario" required>
                        <option value="">--Elige un horario--</option>
                          @foreach($horarios as $item)
                          <option value="{{$item->id_horario}}">
                            {{$item->horario_inicio}} - {{$item->horario_fin}}
                          </option>
                          @endforeach

                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Equipo visitante")}}</label>
                        <select class="form-control form-select" name="visitante" required>
                        <option value="">--Equipo visitante--</option>
                          @foreach($equipos as $item)
                          <option class="form-control" value="{{$item->id_equipo}}">
                            {{$item->nombre_equipo}}</option>
                          @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Fecha del encuentro")}}</label>
                      <input type="date" name="fechaencuentro" class="form-control" required>
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

     <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h5 class="title"> <i class="now-ui-icons files_paper"></i>
            {{__("Encuentros registrados")}}
            </h5>
          </div>
          <div class="card-body">
          <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                      <label>{{__("Selecionar fecha")}}</label>
                      <input type="date" id="encu" name="encu" class="form-control" required>
                    </div>
                </div>
            </div>
            <table id="datatable" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                  <th>
                    Local
                  </th>
                  <th>
                    Visitante
                  </th>
                  <th>
                    Horario
                  </th>
                  <th>
                    Estado
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
  </div>
  </div>
  <!--Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Estadisticas del encuentro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{ route('puntos.store') }}">
          @csrf
          @method('post')
          <div class="modal-body">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                  <label for="exampleInputEmail1" style=" margin-bottom: 0px;" id="NL"></label>
                    <div ><p style=" margin-bottom: 2px; font-size:12px;"><strong>Local</strong></p></div>
                    <div class="col-md-10">
                      <input type="number" style="font-size:20px; text-align:center;" id="localJE" name="localJE" class="form-control" value="0"readonly >
                    </div>
                  </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                  <div class="form-group">
                  <label for="exampleInputEmail1" style=" margin-bottom: 0px;" id="NV"></label>
                    <div ><p style=" margin-bottom: 2px; font-size:12px;"><strong>Visitante</strong></p></div>
                    <div class="col-md-10">
                      <input type="number"  style="font-size:20px; text-align:center;" id="visitanteJE" name="visitanteJE" class="form-control" value="0" readonly >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div  style="border-top:1px solid #e9ecef;">
              <div class="row" style="margin-top:15px;">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jugadores Locales</label>
                    <select class="form-control form-select" id="verL" name="localesE" required>

                    </select>
                  </div>
                  <div class="form-group  ">
                    <label class="col-md-12">N° de Goles</label>
                      <input type="text" style="display:inline-flex;" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="GolesJL" name="GolesJL" class="form-control col-md-8">
                      <button type="button" class="btn btn-success col-md-3"  id="masL"  style="margin:0px;"><i class="fas fa-plus"></i></button>

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jugadores Visitantes</label>
                    <select class="form-control form-select" id="verV" name="visitanteE" required>

                    </select>
                  </div>
                  <div class="form-group ">
                    <label class="col-md-12">N° de Goles</label>
                      <input type="text" style="display:inline-flex;"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="GolesJV" name="GolesJV" class="form-control col-md-8">
                      <button type="button" class="btn btn-success col-md-3" id="masV" style="margin:0px;"><i class="fas fa-plus"></i></button>

                  </div>
                  <input id="idEncuentro" name="idEncuentro" type="hidden" >
                  <input id="idLocal" name="idLocal" type="hidden" >
                  <input id="idVisitante" name="idVisitante" type="hidden" >
                </div>
              </div>
            </div>
            <br>
            <div>
              <table id="Goles" class="table table-striped table-bordered" >
                  <thead class=" text-primary">
                    <th>
                      Jugador
                    </th>
                    <th>
                      Equipo
                    </th>
                    <th>
                      Goles
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
          <div class="modal-footer">
            <button type="button" onclick="limpiar()" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" onclick="GuardarGoles()" class="btn btn-primary">Guardar</button>
            <!--action="{{ route('puntos.store') }}"-->
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--ModalEditarEncuentro-->
  <div class="modal fade" id="exampleModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar encuentro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="{{ route('encuentros.update',0) }}">
          @csrf
          @method('put')
          <div class="modal-body">
          <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Equipo local")}}</label>
                        <select class="form-control form-select" name="localE"  id="localE" required>
                        <option value="">--Equipo local--</option>
                          @foreach($equipos as $item)
                          <option class="form-control" value="{{$item->id_equipo}}">
                            {{$item->nombre_equipo}}</option>
                          @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{__("Horario")}}</label>
                        <select class="form-control" name="horarioE" id="horarioE" required>
                        <option value="">--Elige un horario--</option>
                          @foreach($horarios as $item)
                          <option value="{{$item->id_horario}}">
                            {{$item->horario_inicio}} - {{$item->horario_fin}}
                          </option>
                          @endforeach

                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Equipo visitante")}}</label>
                        <select class="form-control form-select" name="visitanteE" id="visitanteE" required>
                        <option value="">--Equipo visitante--</option>
                          @foreach($equipos as $item)
                          <option class="form-control" value="{{$item->id_equipo}}">
                            {{$item->nombre_equipo}}</option>
                          @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Fecha del encuentro")}}</label>
                      <input type="date" name="fechaencuentroE" id="fechaencuentroE" class="form-control" required>
                    </div>
                    <input id="idEncuentroEdit" name="idEncuentroEdit" type="hidden" >
                  </div>
                </div>
                </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit"  class="btn btn-primary">Editar</button>
            <!--modalEditar exampleModalEditar -->
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
      'Encuentro registrado',
      'El encuentro se registro correctamente.',
      'success'
      )
  </script>
@endif
@if(session('mensaje')=='iguales')
  <script type="text/javascript">
    Swal.fire(
      'Equipo duplicado',
      'El equipo local y visitante deben ser diferente.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='repetido')
  <script type="text/javascript">
    Swal.fire(
      'Encuentro repetido',
      'El encuentro ya esta convocado para esa fecha.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='localR')
  <script type="text/javascript">
    Swal.fire(
      'OPS!',
      'El equipo local ya cuenta con un encuentro para esta fecha.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='visitanteR')
  <script type="text/javascript">
    Swal.fire(
      'OPS!',
      'El equipo visitante ya cuenta con un encuentro para esta fecha.',
      'warning'
      )
  </script>
@endif
@if(session('mensaje')=='guardados')
  <script type="text/javascript">
    Swal.fire(
      'Puntos y goles registrados',
      'Los puntos y goles se registraron correctamente.',
      'success'
      )
  </script>
@endif
@if(session('mensaje')=='actualizado')
  <script type="text/javascript">
    Swal.fire(
      'Encuentro actualizado',
      'El encuentro se actualizo correctamente.',
      'success'
      )
  </script>
@endif

  <!--   Core JS Files   -->
  <script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chart JS -->
  <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets') }}/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets') }}/demo/demo.js"></script>
  <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script type="text/javascript">

    var Datos;
    var JugadoresC;
    var GolesLG=[];
    window.onload=function() {
			Datos=null;JugadoresC=null;
		}



    function limpiar(){
      GolesLG=[];
      $('#localJE').val(0);
      $('#visitanteJE').val(0);
      $('#Goles tbody').html("");
      $('#GolesJV').val("");
      $('#GolesJL').val("");
    }

    function GuardarGoles(){
      var url= "{{url('golesG')}}";
      $.ajax({
          url: url,
          type: "GET",
          data: {GolesLG:GolesLG},
          success: function (data) {
          },
          error: function (data)
          {
          }
          });

    }

    function EliminarArray(id, equipo){
      var tL = $('#localJE').val();
      var tV = $('#visitanteJE').val();
      for(i=0; i<GolesLG.length; i++){
        if(GolesLG[i].id_jugador==id){
          if(equipo==1){
            var totalL = parseInt(tL) - parseInt(GolesLG[i].goles);
            $('#localJE').val("");
            $('#localJE').val(totalL);
          }else{
            var totalV = parseInt(tV) - parseInt(GolesLG[i].goles);
            $('#visitanteJE').val("");
            $('#visitanteJE').val(totalV);
          }

          GolesLG.splice( i, 1 );
          $("#"+id).hide();
          break;
        }
      }

    }

    $('#masL').click(function(){
      var goles= $('#GolesJL').val();
      if(goles!="" && goles!="0"){
        var jugador, filatable="", idEquipo, cont=0;
        var equipo=$('#NL').text();
        var local= $('#verL').val();
        var t = $('#localJE').val();
        for(i=0; i<JugadoresC.comboL.length; i++){
          if(JugadoresC.comboL[i].id_jugador==local){

            jugador=JugadoresC.comboL[i].nombres;
            idEquipo=JugadoresC.comboL[i].id_equipo;
            break;
          }

        }

        let array = {
        'id_jugador': local,
        'id_equipo': idEquipo,
        'jugador': jugador,
        'equipo':equipo,
        'goles': goles,
        'tipo': 1,
        'id_encuentro':$('#idEncuentro').val()
        };
        if(GolesLG.length==0){
          GolesLG.push(array);
          var total = parseInt(t) + parseInt(goles);
          $('#localJE').val("");
          $('#localJE').val(total);
        }else{
          for(i=0; i<GolesLG.length; i++){
          if(local==GolesLG[i].id_jugador){
            Swal.fire(
            'Jugador duplicado',
            'El jugador ya se encuentra registrado como goleador del encuentro.',
            'warning'
            )
            cont ++;
            break;
          }
          }
          if(cont==0){
            GolesLG.push(array);
            var total = parseInt(t) + parseInt(goles);
            $('#localJE').val("");
            $('#localJE').val(total);
          }
        }

        $('#Goles tbody').html("");
        for(i=0; i<GolesLG.length; i++){
            filatable+="<tr id='"+GolesLG[i].id_jugador+"'>";
                filatable+="<td>"+GolesLG[i].jugador+"</td>";
                filatable+="<td>"+GolesLG[i].equipo+"</td>";
                filatable+="<td>"+GolesLG[i].goles+"</td>";
                filatable+=`<td style="text-align:center;">
                          <a onclick="EliminarArray(`+GolesLG[i].id_jugador+`,`+GolesLG[i].tipo+`)" class="btn btn-danger btn-icon btn-sm " >
                          <i class="far fa-trash-alt"></i></a>
                        </td>`;
                filatable+="</tr>";

        }


        $('#Goles tbody').html(filatable);
        $('#GolesJL').val("");
      }


	})

  $('#masV').click(function(){
    var goles= $('#GolesJV').val();
    if(goles!="" && goles!="0"){
      var jugador, filatable="", idEquipo, cont=0;
      var equipo=$('#NV').text();
      var visita= $('#verV').val();
      var t = $('#visitanteJE').val();
      for(i=0; i<JugadoresC.comboV.length; i++){
        if(JugadoresC.comboV[i].id_jugador==visita){
          jugador=JugadoresC.comboV[i].nombres;
          idEquipo=JugadoresC.comboV[i].id_equipo;
          break;
        }
      }
      let array = {
      'id_jugador': visita,
      'id_equipo': idEquipo,
      'jugador': jugador,
      'equipo':equipo,
      'goles': goles,
      'tipo': 2,
      'id_encuentro':$('#idEncuentro').val()
      };
      if(GolesLG.length==0){
        GolesLG.push(array);
        var total = parseInt(t) + parseInt(goles);
        $('#visitanteJE').val("");
        $('#visitanteJE').val(total);
      }else{
        for(i=0; i<GolesLG.length; i++){
        if(visita==GolesLG[i].id_jugador){
          Swal.fire(
          'Jugador duplicado',
          'El jugador ya se encuentra registrado como goleador del encuentro.',
          'warning'
          )
          cont++;
          break;
        }
        }
        if(cont==0){
          GolesLG.push(array);
          var total = parseInt(t) + parseInt(goles);
          $('#visitanteJE').val("");
          $('#visitanteJE').val(total);
        }
      }


      $('#Goles tbody').html("");
      for(i=0; i<GolesLG.length; i++){
          filatable+="<tr id='"+GolesLG[i].id_jugador+"'>";
              filatable+="<td>"+GolesLG[i].jugador+"</td>";
              filatable+="<td>"+GolesLG[i].equipo+"</td>";
              filatable+="<td>"+GolesLG[i].goles+"</td>";
              filatable+=`<td style="text-align:center;">
                        <a onclick="EliminarArray(`+GolesLG[i].id_jugador+`,`+GolesLG[i].tipo+`)" class="btn btn-danger btn-icon btn-sm " >
                        <i class="far fa-trash-alt"></i></a>
                      </td>`;
              filatable+="</tr>";
      }


      $('#Goles tbody').html(filatable);
      $('#GolesJV').val("");
      }

  })

   function CargarModalE(idL, idV, idEncuentro){
    document.getElementById("idEncuentro").value=idEncuentro;
    document.getElementById("idLocal").value=idL;
    document.getElementById("idVisitante").value=idV;
    for(i=0; i<Datos.length; i++){
      if(Datos[i].id_equipo1==idL){
        document.getElementById("NL").innerText=Datos[i].local.nombre_equipo;
      }
      if(Datos[i].id_equipo2==idV){
        document.getElementById("NV").innerText=Datos[i].visitante.nombre_equipo;
      }
    }
    var url= "{{url('FEncuentro')}}"+"/"+idL+"/"+idV;
    $.ajax({
        url:url,
        type: 'GET',
        dataType: 'json'
      })
      .done(function(data) {
        JugadoresC=data;
        //Ver visitante
        $('#verL').html("");
        var filatableL="";
        for(i=0; i<data.comboL.length; i++){
          filatableL+=`
                      <option class="form-control" value="`+data.comboL[i].id_jugador+`">`+data.comboL[i].nombres+` `+data.comboL[i].apellidos+`</option>`;
        }
        $('#verL').html(filatableL);

        //VerLocales
        $('#verV').html("");
        var filatableV="";
        for(i=0; i<data.comboV.length; i++){
          filatableV+=`
                      <option class="form-control" value="`+data.comboV[i].id_jugador+`">`+data.comboV[i].nombres+` `+data.comboV[i].apellidos+`</option>`;
        }
        $('#verV').html(filatableV);




      })
      .fail(function(error) {
        console.log("error");
      })
  }

  function EliminarEncuentro(id){
    var url= "{{url('eliminarE')}}"+"/"+id;
      $.ajax({
        url:url,
        type: 'GET',
        dataType: 'json'
      })
      .done(function(data) {
        if(data==1){
          $("#"+id).hide();
          Swal.fire(
                  'Encuentro eliminado',
                  'El encuentro se elimino correctamente.',
                  'success'
                )
        }
      })
      .fail(function(error) {
        console.log("error");
      })

  }

  function ModalEditar(id){
    var url= "{{url('modalEncuentro')}}"+"/"+id;
      $.ajax({
        url:url,
        type: 'GET',
        dataType: 'json'
      })
      .done(function(data) {
        document.getElementById("localE").value=data.id_equipo1;
        document.getElementById("visitanteE").value=data.id_equipo2;
        document.getElementById("fechaencuentroE").value=data.fecha;
        document.getElementById("horarioE").value=data.id_horario;
        document.getElementById("idEncuentroEdit").value=id;

      })
      .fail(function(error) {
        console.log("error");
      })

  }



  $(document).ready(function() {

    $('#encu').change(function(event) {
      GolesLG=[];
      $('#Goles tbody').html("");
      var fecha = $(this).val();
      var url= "{{url('encuentros')}}"+"/"+fecha;
      $.ajax({
        url:url,
        type: 'GET',
        dataType: 'json'
      })
      .done(function(data) {
        Datos=data;
        $('#datatable tbody').html("");
        var filatable="";
        for(i=0; i<data.length; i++){

            filatable+="<tr id='"+data[i].id_encuentro+"'>";
            filatable+="<td>"+data[i].local.nombre_equipo+"</td>";
            filatable+="<td>"+data[i].visitante.nombre_equipo+"</td>";
            filatable+="<td>"+data[i].horario.horario_inicio+"/"+data[i].horario.horario_fin+"</td>";
            if(data[i].estado==0){
              filatable+=`<td style="text-align:center;">
                            <span class="badge badge-secondary">Finalizado</span>
                          </td>`;
              filatable+=`<td style="text-align:center;">
                            <span class="badge badge-warning">Sin opciones</span>
                          </td>`;

            }else{
              filatable+=`<td style="text-align:center;">
                            <span class="badge badge-primary">Pendiente</span>
                          </td>`;
              filatable+=`<td style="text-align:center;">
                      <a onclick="CargarModalE(`+data[i].id_equipo1+`,`+data[i].id_equipo2+`,`+data[i].id_encuentro+`)" class="btn btn-success btn-icon btn-sm " data-toggle="modal" data-target="#exampleModal" >
                      <i class="fas fa-stopwatch"></i>
                      </a>
                      <a onclick="ModalEditar(`+data[i].id_encuentro+`)" class="btn btn-success btn-icon btn-sm " data-toggle="modal" data-target="#exampleModalEditar"   >
                        <i class="far fa-edit"></i>
                      </a>
                      <a onclick="EliminarEncuentro(`+data[i].id_encuentro+`)"  class="btn btn-danger btn-icon btn-sm " >
                            <i class="far fa-trash-alt"></i>
                      </a>
                  </td>`;
            }




            filatable+="</tr>";

          }
        $('#datatable tbody').html(filatable);
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

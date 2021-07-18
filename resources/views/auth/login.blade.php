@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'login',
    'backgroundImage' => asset('assets') . "/img/LoginFondo.png",
])

@section('content')
    <div class="content">
        <div class="container">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
                <div class="container">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-9">
                                <p class="text-lead text-light mt-3 mb-0">
                                    @include('alerts.migrations_check')
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ml-auto mr-auto" style=" border: 2px #8a8989 solid; border-radius: 20px;">
            <form role="form" method="POST" action="{{ route('inicarSesion') }}">
                @csrf
            <div class="card card-login card-plain">
                <div class="card-header ">
                <div class="logo-container" style="margin-bottom: 20px;    width: 95px;">
                    <img src="{{ asset('assets/img/cliente.png') }}" alt="">
                </div>

                <h5 style="color: #c6c3bdde;">Inicio de Sesión de Usuario</h5>
                </div>
                <div class="card-body ">
                <div class="input-group no-border form-control-lg {{ $errors->has('email') ? ' has-danger' : '' }}">
                    <span class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                    </div>
                    </span>
                    <input autocomplete="off" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Ingrese su email" type="email" name="email"required autofocus>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="input-group no-border form-control-lg {{ $errors->has('password') ? ' has-danger' : '' }}">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                    </div>
                    <input autocomplete="off" placeholder="Ingrese su contraseña" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password"required>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
                <div class="card-footer ">
                <button  type = "submit" class="btn btn-default btn-round btn-lg btn-block mb-3">{{ __('Iniciar Sesión') }}</button>
                <div class="pull-left">
                    <h6 style="font-weight: normal !important;">
                    <a href="registrar" class="link footer-link">{{ __('Crear cuenta') }}</a>
                    </h6>
                </div>
                <div class="pull-right">
                    <h6 style="font-weight: normal !important;">
                    <a href='/' class="link footer-link">{{ __('INICIO') }}</a>
                    </h6>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('mensaje')=='no')
  <script type="text/javascript">
    Swal.fire(
      'Usuario no encontrado',
      'El usuario o la contraseña son incorrectos.',
      'error'
      )
  </script>
@endif

    <script>
        $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush

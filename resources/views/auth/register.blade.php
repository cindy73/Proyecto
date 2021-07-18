@extends('layouts.app', [
    'namePage' => '',
    'activePage' => 'register',
    'backgroundImage' => asset('assets') . "/img/bg16.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="info-area info-horizontal mt-5">
            <div class="icon icon-primary">
              <i class="fas fa-futbol"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('') }}</h5>
              <p class="description">
                Juego para ser feliz y la gente que valore lo que tenga que valorar.

              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-primary">
              <i class="fas fa-align-justify"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('') }}</h5>
              <p class="description">
                Si valoran mi trabajo, encantado, si no, no pasa nada",
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-info">
              <i class="now-ui-icons users_single-02"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('') }}</h5>
              <p class="description">
              Andrés Iniesta.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mr-auto">
          <div class="card card-signup text-center" >
            <div class="card-header " >

              <h4 class="card-title">{{ __('Registrar Usuario') }}</h4>
               <!--
              <div class="social">
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
                <button class="btn btn-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <h5 class="card-description">  {{ __('') }}</h5>
              </div>
               -->
            </div>
            <div class="card-body " style="border-radius: 20px; ">
              <form method="POST" action="{{ route('newuser') }}">
                @csrf
                <!--Begin input name -->
                <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input autocomplete="off" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombres" type="text" name="name"required autofocus>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input email -->
                <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </div>
                  </div>
                  <input autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" type="email" name="email" required>
                 </div>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <!--Begin input user type-->

                <!--Begin input password -->
                <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </div>
                  </div>
                  <input autocomplete="off" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" type="password" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input confirm password -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                  </div>
                  <input autocomplete="off" class="form-control" placeholder="Confirmar contraseña" type="password" name="password_confirmation" required>
                </div>
                <div class="form-check text-left">
                  <label class="form-check-label">
                    <input autocomplete="off"  class="form-check-input" type="checkbox">
                    <span class="form-check-sign"></span>
                    {{ __('Estoy de acuerdo ') }}
                    <a href="#something">{{ __('con los términos y condiciones.') }}</a>.
                  </label>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Registrar')}}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush

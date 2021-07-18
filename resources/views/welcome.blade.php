@extends('layouts.app', [
    'namePage' => '',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'welcome',
    'backgroundImage' => asset('assets') . "/img/estadio.png",
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
                            <h1 class="text-white" style=" margin-bottom: 0px; font-weight: normal; font-family: 'Montserrat'; BORDER-BOTTOM: 1px #fff solid !important; padding-bottom: 5px;">"CAMPEONATO DE FULBITO"</h1>
                              <h5 class="text-white" style=" word-spacing: 2em; letter-spacing: 0.8em; margin-top: 0px; padding-top: 5px;">
                                SISTEMA INFORMATIVO</h5>
                                <p class="text-lead text-light mt-3 mb-0">
                                                                </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
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

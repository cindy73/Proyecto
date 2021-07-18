<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('FC') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('Opciones') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="fab fa-asymmetrik"></i>
          <p>
            {{ __("Equipos/Jugadores") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="">
                <i class="fas fa-puzzle-piece"></i>
                <p> {{ __("Ingresar equipos") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="">
                <i class="fas fa-user-plus"></i>
                <p> {{ __("Ingresar jugadores") }} </p>
              </a>
            </li>
          </ul>
        </div>
      <li class="@if ($activePage == 'icons') active @endif">
        <a href="">
          <i class="fas fa-clock"></i>
          <p>{{ __('Horarios') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
        <a href="">
          <i class="fas fa-handshake"></i>
          <p>{{ __('Encuentros') }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'notifications') active @endif">
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
</div>

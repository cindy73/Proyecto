@extends('layouts.app', [
  'namePage' => '',
  'class' => 'sidebar-mini',
  'activePage' => 'notifications',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tabla de posiciones</h4>
          </div>
          <div class="card-body">
            <table style="text-align: center;" id="datatable" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                  <th>
                    Equipos
                  </th>
                  <th>
                    Puntos
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Fc
                    </td>
                    <td>
                      5
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tabla de goleadores</h4>
          </div>
          <div class="card-body">
            <table style="text-align: center;" id="datatable" class="table table-striped table-bordered" >
                <thead class=" text-primary">
                  <th>
                    Jugadores
                  </th>
                  <th>
                    Goles
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Cindy
                    </td>
                    <td>
                      10
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Equipos goleador</h4>
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Equipo mas goleado</h4>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection
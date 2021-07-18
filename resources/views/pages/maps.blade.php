@extends('layouts.app', [
    'namePage' => '',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
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
                        <label>{{__("Equipo local")}}</label>
                        <select class="form-control" required>
                          <option value="1">local</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{__("Horario")}}</label>
                        <select class="form-control" required>
                          <option value="1">8:00 - 10:00</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Equipo visitante")}}</label>
                        <select class="form-control" required>
                          <option value="1">visita</option>
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
                    Opciones
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Fc
                    </td>
                    <td>
                      City
                    </td>
                    <td>
                      8:00 - 10:00
                    </td>
                    <td>
                      <center>
                        <a href="" class="btn btn-success btn-icon btn-sm " >
                        <i class="fas fa-eraser"></i>
                      </a>
                      </center>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
      </div>
    </div>
      <div class="col-md-1">
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initGoogleMaps();
        });
    </script>
@endpush
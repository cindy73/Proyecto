@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => '',
    'activePage' => 'profile',
    'activeNav' => '',
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
            <h5 class="title"><i class="now-ui-icons location_bookmark"></i>
              {{__(" Crear nuevo equipo")}}
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
                  <div class="col-md-7">
                    <div class="form-group">
                        <label>{{__(" Nombre del equipo")}}</label>
                        <input type="text" name="nombredelequipo" class="form-control" required placeholder="Ingrese nombre del equipo">
                                @include('alerts.feedback', ['field' => 'name'])
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Fecha de creacion")}}</label>
                      <input type="date" name="fechacreacion" class="form-control" required>
                      @include('alerts.feedback', ['field' => 'email'])
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
            <h5 class="title"> <i class="now-ui-icons files_paper"></i>
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
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      <a href="" class="btn btn-success btn-icon btn-sm " >
                        <i class="far fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-danger btn-icon btn-sm " >
                        <i class="far fa-trash-alt"></i>
                      </a>
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
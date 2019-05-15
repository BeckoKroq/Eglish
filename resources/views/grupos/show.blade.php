@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Grupo</h4>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th width="10px">ID</th>
                      <th>Nombre</th>
                      <th>Docente</th>
                      <th>Días</th>
                      <th>Horario</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{ $grupo->id }}</td>
                        <td>{{ $grupo->nombre_grupo }}</td>
                        <td>{{ $grupo->docente }}</td>
                        <td>{{ $grupo->dias}}</td>
                        <td>{{ $grupo->horario }}</td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <br>
              <div class="card">
                  <div class="card-header">
                  <h4>Alumnos</h4>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Calificaciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td width="10px">
                            @can ('users.show')
                              <a href="{{ route('users.show', $user->id ) }}"
                              class="btn btn-sm btn-success">
                                Ver
                              </a>
                            @endcan
                          </td>
                        </tr>

                      @endforeach
                    </tbody>
                  </table>

                </div>
            </div>

        </div>
    </div>
  </div>
@endsection

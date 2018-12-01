@extends('layouts.administrador')

@section('content')

<div class="row" style="padding: 20px;">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Listado</span>
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>AP Paterno</th>
                    <th>AP Materno</th>
                    <th>correo</th>
                    <th>numero</th>
                    <th>ubicacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id_trabajador }}</td>
                        <td><img src="images/trabajador/{{$row->ubicacion_trabajador}}" alt="" width="50px" height="50px"></td>
                        <td>{{ $row->nombre_trabajador }}</td>
                        <td>{{ $row->apellidoPa_trabajador }}</td>
                        <td>{{ $row->apellidoMa_trabajador }}</td>
                        <td>{{ $row->correo }}</td>
                        <td>{{ $row->numero }}</td>
                        <td>{{ $row->ubicacion_trabajador }}</td>
                        <td><a href="{{route('trabajador.edit',$row->id_trabajador)}}" class="waves-effect waves-light btn amber darken-1"><i class="material-icons">mode_edit</i></a></td>
                        <td>
                            <form id="eliminar-{{$row->id_trabajador}}" action="{{ route('trabajador.destroy',$row->id_trabajador)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="javascript:{}" onclick="document.getElementById('eliminar-{{$row->id_trabajador}}').submit();" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="fixed-action-btn">
    <a href="trabajador/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

@endsection

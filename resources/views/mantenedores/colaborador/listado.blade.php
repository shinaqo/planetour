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
                    <th>Ubicacion</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id_colaborador }}</td>
                        <td><img src="images/colaborador/{{$row->ubicacion}}" class="materialboxed" alt="" width="50px" height="50px"></td>
                        <td>{{ $row->nombre_colaborador }}</td>
                        <td>{{ $row->ubicacion }}</td>
                      
                        <td>
                            <form id="eliminar-{{$row->id_colaborador}}" action="{{ route('colaborador.destroy',$row->id_colaborador)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="javascript:{}" onclick="document.getElementById('eliminar-{{$row->id_colaborador}}').submit();" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
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
    <a href="colaborador/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

	
@endsection
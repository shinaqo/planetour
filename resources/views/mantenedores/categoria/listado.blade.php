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
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id_categoria }}</td>
                        <td>{{ $row->nombre_categoria }}</td>
                        @if($row->tipo_categoria===0)
                        <td><a href="{{route('categoria.edit',$row->id_categoria)}}" class="waves-effect waves-light btn amber darken-1"><i class="material-icons">mode_edit</i></a></td>
                        <td>
                            <form id="eliminar-{{$row->id_categoria}}" action="{{ route('categoria.destroy',$row->id_categoria)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="javascript:{}" onclick="document.getElementById('eliminar-{{$row->id_categoria}}').submit();" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
                            </form>
                        </td>
                        @else
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="fixed-action-btn">
    <a href="categoria/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

@endsection

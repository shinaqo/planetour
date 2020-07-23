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
                    <th>Precio</th>
                    <th>Moneda</th>
                    <th>Dias</th>
                    <th>pais</th>
                    <th>categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id_producto }}</td>
                        <td><img  src="{!! asset('images/portadas/') !!}/{{$row->portada_producto}}" class="materialboxed" alt="" width="50px" height="50px"> </td>
                        <td>{{ $row->nombre_producto }}</td>
                        <td>{{ $row->precio_producto }}</td>
                        <td>{{ $row->tipoMoneda_producto }}</td>
                        <td>{{ $row->dias_producto }}</td>
                        <td>{{ $row->nombre_pais }}</td>
                        <td>{{ $row->nombre_categoria }}</td>
                        <td><a href="{{route('producto.edit',$row->id_producto)}}" class="waves-effect waves-light btn amber darken-1"><i class="material-icons">mode_edit</i></a></td>
                        <td>
                            <form id="eliminar-{{$row->id_producto}}" action="{{ route('producto.destroy',$row->id_producto)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="javascript:{}" onclick="document.getElementById('eliminar-{{$row->id_producto}}').submit();" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
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
    <a href="producto/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

@endsection

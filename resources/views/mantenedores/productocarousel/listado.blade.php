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
                    <th>carpeta</th>
                    <th>Imagen</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->id_slider }}</td>
                        <td>{{ $row->nombre_producto }}</td>
                        <td>{{ $row->carpeta }}</td>
                        <td><img  src="{!! asset('images/slider') !!}/{{$row->carpeta}}/{{$row->src}}" class="materialboxed" alt="" width="50px" height="50px"> </td>
                        <td>
                            <form id="eliminar-{{$row->id_slider}}" action="{{ route('productocarousel.destroy',$row->id_slider)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="javascript:{}" onclick="document.getElementById('eliminar-{{$row->id_slider}}').submit();" class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
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
    <a href="productocarousel/create" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
</div>

@endsection


@extends('layouts/administrador')
@section('content')

<div class="row" style="padding: 20px;">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Crear Item carousel</span>
        <form id="formularioCrear" method="post" action="/productocarousel" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="row">

          <div class="input-field col s4">
            <select id="producto_id_producto" name="producto_id_producto">
              @foreach($producto as $row)
              <option value="{{$row->id_producto}}">{{$row->nombre_producto}}</option>
              @endforeach
            </select>
            <label>Pais</label>
          </div>

          <div class="input-field col s4">
            <input value="" id="ubicacion_carousel[]" name="ubicacion_carousel[]" type="file" class="validate" multiple="">

            <label class="active" for="ubicacion_carousel">ubicacion</label>
          </div>

        </div>

        
      </form>

    </div>
    <div class="card-action">
      <a href="{!! asset('productocarousel') !!}">Cancelar</a>
      <a href="javascript:{}" onclick="document.getElementById('formularioCrear').submit();">Crear</a>
    </div>
  </div>
</div>
</div>
<script>
        $(document).ready(function(){
    $('select').formSelect();
  });
       
      </script>

@endsection
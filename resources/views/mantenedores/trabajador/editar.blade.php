@extends('layouts.administrador')

@section('content')


<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Crear Trabajador</span>
                <form id="formularioEditar" method="post" action="/trabajador/{{$data_trabajador->id_trabajador}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s4">
                            <input value="{{$data_trabajador->nombre_trabajador}}" id="nombre_trabajador" name="nombre_trabajador" type="text" class="validate">
                            <label class="active" for="nombre_trabajador">Nombre</label>
                        </div>

                        <div class="input-field col s4">
                            <input value="{{$data_trabajador->apellidoPa_trabajador}}" id="apellidoPa_trabajador" name="apellidoPa_trabajador" type="text" class="validate">
                            <label class="active" for="apellidoPa_trabajador">AP Paterno</label>
                        </div>

                        <div class="input-field col s4">
                            <input value="{{$data_trabajador->apellidoMa_trabajador}}" id="apellidoMa_trabajador" name="apellidoMa_trabajador" type="text" class="validate">
                            <label class="active" for="apellidoMa_trabajador">AP Materno</label>
                        </div>

                        <div class="input-field col s4">
                            <input value="{{$data_trabajador->correo}}" id="correo" name="correo" type="text" class="validate">
                            <label class="active" for="correo">Correo</label>
                        </div>

                        <div class="input-field col s4">
                            <input value="{{$data_trabajador->numero}}" id="numero" name="numero" type="text" class="validate">
                            <label class="active" for="numero">numero</label>
                        </div>

                    
                         <div class="input-field col s4">
                         <select id="cargo_id_cargo" name="cargo_id_cargo">

                          @foreach($select_cargo as $row)
                          
                          @if($data_trabajador->cargo_id_cargo === $row->id_cargo)
                          <option value="{{$row->id_cargo}}" selected>{{$row->nombre_cargo}}</option>
                          @else
                          <option value="{{ $row->id_cargo }}" >{{ $row->nombre_cargo }}</option> 
                          @endif
                          
                          @endforeach
                        </select>
                        <label>Cargo</label>
                      </div>


                        <div class="input-field col s4">
                            <input value="" id="ubicacion_trabajador" name="ubicacion_trabajador" type="file" class="validate">

                            <label class="active" for="ubicacion_trabajador">ubicacion</label>
                        </div>

                        <div class="input-field col s4">
                            <img src="../../images/trabajador/{{$data_trabajador->ubicacion_trabajador}}" alt="" width="100px" height="100px">
                            <label class="active" for="ubicacion">ubicacion</label>

                        </div>  
                    </div>
                </form>

            </div>
            <div class="card-action">
      <a href="{!! asset('trabajador') !!}">Cancelar</a>
      <a href="javascript:{}" onclick="document.getElementById('formularioEditar').submit();">Editar</a>
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

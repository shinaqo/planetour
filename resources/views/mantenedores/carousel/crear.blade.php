
@extends('layouts/administrador')
@section('content')

<div class="row" style="padding: 20px;">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Crear Item carousel</span>
        <form id="formularioCrear" method="post" action="/carousel" enctype="multipart/form-data" onsubmit="return validar_carousel();">
         {{ csrf_field() }}
         <div class="row">
          <div class="input-field col s4">
            <input value="" id="titulo_carousel" name="titulo_carousel" type="text" class="validate" >
            <label class="active" for="titulo_carousel">Nombre</label>
          </div>

          <div class="input-field col s4">
            <input value="" id="ubicacion_carousel[]" name="ubicacion_carousel[]" type="file" class="validate" multiple="">

            <label class="active" for="ubicacion_carousel">ubicacion</label>
          </div>

        </div>
        
      </div>
      <div class="card-action">
        <a href="{!! asset('carousel') !!}">Cancelar</a>
        <button class="btn waves-effect waves-light deep-orange" type="submit" name="action">Crear
          <i class="material-icons right">send</i>
        </button>
        <!-- <a href="javascript:{}" onclick="document.getElementById('formularioCrear').submit();">Crear</a> -->
      </div>
    </form>
  </div>
</div>
</div>
@endsection
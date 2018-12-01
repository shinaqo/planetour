@extends('layouts.administrador')

@section('content')



<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Crear pais</span>
                <form id="formularioEditar" method="post" action="/pais/{{$data_pais->id_pais}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s4">
                            <input value="{{$data_pais->nombre_pais}}" id="nombre_pais" name="nombre_pais" type="text" class="validate">
                            <label class="active" for="nombre_pais">Nombre</label>
                        </div>
  
                    </div>
                </form>

            </div>
            <div class="card-action">
      <a href="{!! asset('pais') !!}">Cancelar</a>
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

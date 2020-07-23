@extends('layouts.administrador')

@section('content')



<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Crear cargo</span>
                <form id="formularioEditar" method="post" action="/cargo/{{$data_cargo->id_cargo}}" enctype="multipart/form-data" onsubmit="return validar_cargo();">
                    <input name="_method" type="hidden" value="PUT">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s4">
                            <input value="{{$data_cargo->nombre_cargo}}" id="nombre_cargo" name="nombre_cargo" type="text" class="validate">
                            <label class="active" for="nombre_cargo">Nombre</label>
                        </div>

                    </div>

                </div>
                <div class="card-action">
                    <a href="{!! asset('cargo') !!}">Cancelar</a>
                    <button class="btn waves-effect waves-light deep-orange" type="submit" name="action">Modificar
                        <i class="material-icons right">send</i>
                    </button>
                    <!-- <a href="javascript:{}" onclick="document.getElementById('formularioCrear').submit();">Crear</a> -->
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>

@endsection

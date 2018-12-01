@extends('layouts.administrador')

@section('content')



<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Crear categoria</span>
                <form id="formularioEditar" method="post" action="/categoria/{{$data_categoria->id_categoria}}" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s4">
                            <input value="{{$data_categoria->nombre_categoria}}" id="nombre_categoria" name="nombre_categoria" type="text" class="validate">
                            <label class="active" for="nombre_categoria">Nombre</label>
                        </div>

                        
                    </div>
                </form>

            </div>
            <div class="card-action">
              <a href="{!! asset('categoria') !!}">Cancelar</a>
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

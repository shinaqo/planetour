@extends('layouts.administrador')

@section('content')

<div class="row" style="padding: 20px;">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Crear producto</span>
        <form id="formularioEditar" method="post" action="/producto/{{$data_producto->id_producto}}" enctype="multipart/form-data" onsubmit="return validar_producto();">
          <input name="_method" type="hidden" value="PUT">

          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s4">
              <input value="{{$data_producto->nombre_producto}}" id="nombre_producto" name="nombre_producto" type="text" class="validate">
              <label class="active" for="nombre_producto">Nombre</label>
            </div>

            <div class="input-field col s4">
              <input value="{{$data_producto->precio_producto}}" id="precio_producto" name="precio_producto" type="text" class="validate">
              <label class="active" for="precio_producto">Precio</label>
            </div>

           <!--  <div class="input-field col s4">
              <input value="{{$data_producto->descripcion_producto}}" id="descripcion_producto" name="descripcion_producto" type="text" class="validate">
              <label class="active" for="descripcion_producto">Descripcion</label>
            </div>
          -->
          <div class="input-field col s4">
            <select id="" name="tipoMoneda_producto">

              @if($data_producto->tipoMoneda_producto === 'USD')
              <option value="USD" selected>USD</option>
              <option value="CLP">CLP</option>
              @else
              <option value="CLP" selected>CLP</option>
              <option value="USD" >USD</option>
              @endif

            </select>
            <label>Moneda</label>
          </div>

          <div class="input-field col s4">
            <input value="{{$data_producto->dias_producto}}" id="dias_producto" name="dias_producto" type="number" class="validate">
            <label class="active" for="dias_producto">Dias</label>
          </div>

          <div class="input-field col s4">
           <select id="pais_id_pais" name="pais_id_pais">

            @foreach($select_pais as $pais)

            @if($data_producto->pais_id_pais === $pais->id_pais)
            <option value="{{$pais->id_pais}}" selected>{{$pais->nombre_pais}}</option>
            @else
            <option value="{{ $pais->id_pais }}" >{{ $pais->pais }}</option> 
            @endif

            @endforeach
          </select>
          <label>Pais</label>
        </div>

        <div class="input-field col s4">
         <select id="categoria_id_categoria" name="categoria_id_categoria">

          @foreach($select_categoria as $categoria)

          @if($data_producto->categoria_id_categoria === $categoria->id_categoria)
          <option value="{{$categoria->id_categoria}}" selected>{{$categoria->nombre_categoria}}</option>
          @else
          <option value="{{ $categoria->id_categoria }}" >{{ $categoria->nombre_categoria }}</option> 
          @endif

          @endforeach
        </select>
        <label>Categoria</label>
      </div>
      <div class="input-field col s4">
        <select id="" name="destacado_producto">
          @if($data_producto->destacado_producto === 0)
          <option value="0" selected>No</option>
          <option value="1">Si</option>
          @else
          <option value="1" selected>Si</option>
          <option value="0" >No</option>
          @endif
        </select>
        <label>Viaje Destacado</label>
      </div>
      @if($data_producto->categoria_id_categoria === 2)

      <div class="input-field col s12">
        <textarea id="caracteristicasGira_producto" name="caracteristicasGira_producto">{{$data_producto->caracteristicasGira_producto}}</textarea>
        <label class="active" for="caracteristicasGira_producto">Caracteristicas gira</label>
      </div>
      @endif

      <div class="input-field col s12">
        <h5 style="text-align: center;">Programa Producto</h5>
        <textarea id="descripcion_producto" name="descripcion_producto">{{$data_producto->descripcion_producto}}</textarea>
      </div>

      <div class="input-field col s12">
        <h5 style="text-align: center;">Importante Producto</h5>
        <textarea id="importante_producto" name="importante_producto">{{$data_producto->importante_producto}}</textarea>
      </div>
    </div>

  </div>
  <div class="card-action">
    <a href="{!! asset('producto') !!}">Cancelar</a>
    <button class="btn waves-effect waves-light deep-orange" type="submit" name="action">Crear
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

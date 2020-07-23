@extends('layouts.administrador')

@section('content')

<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear producto</span>
				<form id="formularioCrear" method="post" action="/producto" enctype="multipart/form-data" onsubmit="return validar_producto();">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="nombre_producto" name="nombre_producto" type="text" class="validate">
							<label class="active" for="nombre_producto">Nombre</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="precio_producto" name="precio_producto" type="text" class="validate">
							<label class="active" for="precio_producto">Precio</label>
						</div>

					<!-- 	<div class="input-field col s4">
							<input value="" id="descripcion_producto" name="descripcion_producto" type="text" class="validate">
							<label class="active" for="descripcion_producto">Descripcion</label>
						</div> -->
						<div class="input-field col s4">
							<select id="" name="tipoMoneda_producto">
								<option value="USD">USD</option>
								<option value="CLP">CPL</option>
							</select>
							<label>Moneda</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="dias_producto" name="dias_producto" type="text" class="validate">
							<label class="active" for="dias_producto">Dias</label>
						</div>

						<div class="input-field col s4">
							<select id="pais_id_pais" name="pais_id_pais">
								@foreach($select_pais as $pais)
								<option value="{{$pais->id_pais}}">{{$pais->nombre_pais}}</option>
								@endforeach
							</select>
							<label>Pais</label>
						</div>
						
						<div class="input-field col s4">
							<select id="categoria_id_categoria" name="categoria_id_categoria">
								@foreach($select_categoria as $categoria)
								<option value="{{$categoria->id_categoria}}">{{$categoria->nombre_categoria}}</option>
								@endforeach
							</select>
							<label>Categoria</label>

						</div>

						<div class="input-field col s12" style="display: none;" id="control_gira">
							<textarea id="caracteristicasGira_producto" name="caracteristicasGira_producto"></textarea>
							<label class="active" for="caracteristicasGira_producto">Caracteristicas gira</label>
						</div>
						

						<div class="input-field col s6">
							<input value="" id="portada_producto" name="portada_producto" type="file" class="validate">

							<label class="active" for="portada_producto">Portada</label>
						</div>
						<div class="input-field col s4">
							<select id="" name="destacado_producto">
								<option value="0">No</option>
								<option value="1">Si</option>
							</select>
							<label>Viaje Destacado</label>
						</div>

						<div class="input-field col s12">
							<h5 style="text-align: center;">Programa Producto</h5>
							<textarea id="descripcion_producto" name="descripcion_producto"></textarea>
						</div>

						<div class="input-field col s12">
							<h5 style="text-align: center;">Importante Producto</h5>
							<textarea id="importante_producto" name="importante_producto"></textarea>
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
<script>
	$(document).ready(function() {
    //Select para mostrar e esconder divs
    $('#categoria_id_categoria').on('change',function(){
    	var SelectValue=$(this).val();
    	if (SelectValue==2) {
    		document.getElementById('control_gira').style.display='block';
    	} else {
    		document.getElementById('control_gira').style.display='none';
    	}
    });
});

</script>
@endsection

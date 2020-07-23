
@extends('layouts/administrador')
@section('content')

<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear Colabotador</span>
				<form id="formularioCrear" method="post" action="/colaborador" enctype="multipart/form-data" >
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="nombre_colaborador" name="nombre_colaborador" type="text" class="validate" >
							<label class="active" for="nombre_colaborador">Nombre Colaborador</label>
						</div>

						<div class="input-field col s4">
							<select id="" name="estado">
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
							<label>Estado</label>
						</div>

						<div class="input-field col s4">
							<select id="" name="categoria">
								<option value="0">Linea Aerea</option>
								<option value="1">Seguridad de viaje</option>
								<option value="2">Cadenas Hoteleras</option>
								<option value="3">Op turismo chile</option>
								<option value="4">Op turismo extrangero</option>
								<option value="5">Cruceros</option>
							</select>
							<label>Categoria</label>
						</div>
						<div class="input-field col s4">
							<input value="" id="ubicacion" name="ubicacion" type="file" class="validate">

							<label class="active" for="ubicacion">ubicacion</label>
						</div>

					</div>

				</div>
				<div class="card-action">
					<a href="{!! asset('colaborador') !!}">Cancelar</a>
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
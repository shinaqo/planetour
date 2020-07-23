@extends('layouts.administrador')

@section('content')

<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear Cargo para trabajador</span>
				<form id="formularioCrear" method="post" action="/cargo" enctype="multipart/form-data" onsubmit="return validar_cargo();">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="nombre_cargo" name="nombre_cargo" type="text" class="validate">
							<label class="active" for="nombre_cargo">Nombre Cargo</label>
						</div>

					</div>

				</div>
				<div class="card-action">
					<a href="{!! asset('cargo') !!}">Cancelar</a>
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

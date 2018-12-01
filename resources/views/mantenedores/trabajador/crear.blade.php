@extends('layouts.administrador')

@section('content')


 <?php
 $id= Auth::user()->id;
echo $id;
 ?>

<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear Trabajador</span>
				<form id="formularioCrear" method="post" action="/trabajador" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="nombre_trabajador" name="nombre_trabajador" type="text" class="validate">
							<label class="active" for="nombre_trabajador">Nombre</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="apellidoPa_trabajador" name="apellidoPa_trabajador" type="text" class="validate">
							<label class="active" for="apellidoPa_trabajador">AP Paterno</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="apellidoMa_trabajador" name="apellidoMa_trabajador" type="text" class="validate">
							<label class="active" for="apellidoMa_trabajador">AP Materno</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="correo" name="correo" type="text" class="validate">
							<label class="active" for="correo">Correo</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="numero" name="numero" type="text" class="validate">
							<label class="active" for="numero">numero</label>
						</div>

						<div class="input-field col s4">
							<select id="cargo_id_cargo" name="cargo_id_cargo">
								@foreach($cargo as $row)
								<option value="{{$row->id_cargo}}">
									{{$row->nombre_cargo}}
								</option>
								@endforeach
							</select>
							<label>Perfil</label>
						</div>
						
						<input type="text" hidden="hidden" value="">
						<div class="input-field col s4">
							<input value="" id="ubicacion_trabajador" name="ubicacion_trabajador" type="file" class="validate">

							<label class="active" for="ubicacion_trabajador">ubicacion</label>
						</div>

					</div>
				</form>

			</div>
			<div class="card-action">
				<a href="{!! asset('trabajador') !!}">Cancelar</a>
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

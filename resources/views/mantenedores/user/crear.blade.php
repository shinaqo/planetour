@extends('layouts.administrador')

@section('content')

<h1><?php  ?></h1>
<div class="row" style="padding: 20px;">
	<div class="col s12 m12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Crear users</span>
				<form id="formularioCrear" method="post" action="/user">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s4">
							<input value="" id="name" name="name" type="text" class="validate">
							<label class="active" for="name">Nombre</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="email" name="email" type="text" class="validate">
							<label class="active" for="email">Correo</label>
						</div>

						<div class="input-field col s4">
							<input value="" id="password" name="password" type="text" class="validate">
							<label class="active" for="password">Clave</label>
						</div>


						<div class="input-field col s4">
							<select id="perfil_id" name="perfil_id">
								@foreach($perfil as $row)
								<option value="{{$row->id}}">
									{{$row->nombre}}
								</option>
								@endforeach
							</select>
							<label>Perfil</label>
						</div>
						
						

					</div>
				</form>

			</div>
			<div class="card-action">
				<a href="{!! asset('user') !!}">Cancelar</a>
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

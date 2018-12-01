@extends('layouts.administrador')

@section('content')

<div class="row" style="padding: 20px">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Editar</span>
        
        <form id="formularioEditar" method="post" action="/user/{{$data_user->id}}">
          <input name="_method" type="hidden" value="PUT">
          
          {{ csrf_field()}}
          <div class="row">
            <div class="input-field col s6">
              <input value="{{$data_user->name}}" id="name" name="name" type="text" class="validate">
              <label class="active" for="name">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input value="{{$data_user->email}}" id="email" name="email" type="email" class="validate">
              <label class="active" for="email">Mail</label>
            </div>
            <div class="input-field col s6">
              <input value="{{$data_user->password}}" id="password" type="password" class="validate">
              <label class="active" for="password">Clave</label>
            </div>
            
            <div class="input-field col s6">
             <select id="perfil_id" name="perfil_id">
              @foreach($select_perfil as $row)
              @if($data_user->perfil_id === $row->id)
              <option value="{{$row->id}}" selected="selected">
                {{$row->nombre}}
              </option>
              @else
              <option value="{{$row->id}}">
                {{$row->nombre}}
              </option>
              @endif
              
              @endforeach
            </select>
            <label>Perfil</label>
          </div>
          
        </div>
        
      </form>


      
      
    </div>
    <div class="card-action">
      <a href="{!! asset('user') !!}">Cancelar</a>
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

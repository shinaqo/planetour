@extends('layouts/principal')
@section('contenido')


<!-- <h1 style="text-align: center;">Categoria :"aquí"</h1> -->

 <!--  <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Programas</a>
        <a href="#!" class="breadcrumb"></a>
      </div>
    </div>
  </nav> -->
 
  <div style="text-align: center; padding: 2%">
    @foreach($data2 as $categoria)
 
    <span class="font-x3 font-brush"> {{$categoria->nombre_categoria}}</span>      
 @endforeach
  </div>
  <div class="container2" >
    <div class="row">
     @if($data==null)
     <div style="">
      <img class="responsive-img" src="{!! asset('empresa') !!}/NO-ENCONTRADO.jpg" style="margin-left: auto;
      margin-right: auto;
      display: block;" >
    </div>
    @endif
    @foreach($data as $row2)
    <div class="col s12 m12 l6 xl4  ">

      <div class="example-1 card-viaje ">

        <div class="wrapper" style="background: url('{!! asset('images') !!}/portadas/{{$row2->portada_producto}}') center/cover no-repeat;">

          <div class="date">
            <span class="day">{{$row2->dias_producto}}</span>
            <span class="month">Días</span>
          </div>
          <div class="date2">
            <span>desde</span>
            <span class="day">{{$row2->tipoMoneda_producto}}</span>
            <span class="month">{{$row2->precio_producto}}</span>
          </div>
          <div class="data">
            <div class="content">
              <span class="author">{{$row2->nombre_pais}}</span>
              <h6 class="title"><a href="{{route('descripcionproducto.show',$row2->id_producto)}}">{{$row2->nombre_producto}}</a></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

@stop
@extends('layouts/principal')
@section('contenido')

<h1 style="text-align: center;">Categoria :"aquí"</h1>

<div class="container2">
  <div class="row">
   
@foreach($data as $row2)
      <div class="col s12 m12 l6 xl4  ">

      <div class="example-1 card-viaje ">

        <div class="wrapper" style="background: url('{!! asset('images') !!}/portadas/{{$row2->portada_producto}}') center/cover no-repeat;">

          <div class="date">
            <span class="day">12</span>
            <span class="month">Días</span>
          </div>
          <div class="date2">
            <span>desde</span>
            <span class="day">USD</span>
            <span class="month">1.350</span>
          </div>
          <div class="data">
            <div class="content">
            <span class="author">México</span>
            <h6 class="title"><a href="{{route('descripcionproducto.show',$row2->id_producto)}}">Cancún caribe mexicano</a></h6>
          </div>
          </div>
        </div>
      </div>
    </div>
@endforeach

  </div>
</div>

@stop
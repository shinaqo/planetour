@extends('layouts/principal')
@section('contenido')


<div class="carousel carousel-slider slider">
  @foreach($data as $row)
  <a class="carousel-item" href="#one!"><img  class="responsive-img" src="images/carousel/{{$row->ubicacion_carousel}}"></a>
  @endforeach
</div>

<div class="container">
  <div class="nosotros">
    <div class="row">

      <div class="col s12 m12 l12 xl12 ">
        <h3 class="titulo-card">VIAJES IMPORTANTES</h3>
      </div>
    </div>

  </div>
  

</div>
<div class="container2">
  <div class="row">
   
@foreach($producto as $row2)
      <div class="col s12 m12 l6 xl4 ">

      <div class="example-1 card-viaje ">

        <div class="wrapper" style="background: url('images/portadas/{{$row2->portada_producto}}') center/cover no-repeat;">
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
<script>
  $(document).ready(function(){

    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true,
      duration:700
      // }).height(500);
    });

    setInterval(function(){
      $('.carousel.carousel-slider').carousel('next');
    },6000);
  });

</script>
@stop
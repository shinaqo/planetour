@extends('layouts/principal')
@section('contenido')
<style>
li {
  list-style: disc!important;
}
#prueba{
  background: #eee!important;

  background: linear-gradient(180deg,#fcfcfc,#eee);
}
.container-descipcion{
  background-color: #fff!important;
}
</style>

		<!-- <div style="background-color: #007ead;width: 780px" >
			<h1 style="text-align: center;color: white">{{$producto->nombre_producto}}</h1>
		</div> -->

	<!-- 	<div class="carousel carousel-slider" >
			@foreach($data as $row)
			<a class="carousel-item" href="#one!"><img class="responsive-img" src="{!! asset('images')!!}/slider/{{$row->carpeta}}/{{$row->src}}"></a>
			@endforeach
		</div> -->

    <div class="container" >
      <div class="slider" ">
        <ul class="slides" >
          @foreach($data as $row)
          <li>
            <img src="{!! asset('images')!!}/slider/{{$row->carpeta}}/{{$row->src}}"> <!-- random image -->
            <div class="caption center-align">
         <!--  <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>     

<div class="container container-descipcion" style="margin-bottom: 30px!important">
	

	<div class="container2">

		<!-- <?php
		echo $producto->descripcion_producto;
		?> -->
	</div>
  <div class="center-item">
    <ul id="tabs-swipe-demo" class="tabs" style="text-align: center;">
      <li class="tab col s3"><a href="#test-swipe-1" class="orange-text text-darken-4 active" >Programa</a></li>
      <li class="tab col s3"><a class="orange-text text-darken-4" href="#test-swipe-2">importante</a></li>
    </ul>
  </div>

  <div class="container" style="margin-top: 15px;margin-bottom: 15px">
    <div id="test-swipe-1" class="col s12 conche" >
      <div style="font-size: 16px;margin-bottom: 1.5em;">
       <h5> CARACTERÍSTICAS DEL VIAJE</h5>
     </div>
     <div class="separacion">
     <?php  
     echo $producto->descripcion_producto;
     ?>
    </div>

   Valor por persona: Desde $799.990.-</div>
   <div id="test-swipe-2" class="col s12 " style="transition: 0.10s">
    <h5>IMPORTANTE</h5>
    <?php  
    echo $producto->importante_producto;
    ?>


  </div>
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
<script>
	$(document).ready(function(){
    $('.tabs').tabs();

    document.getElementById("MyElement").className += " MyClass";
  });
</script>
@stop
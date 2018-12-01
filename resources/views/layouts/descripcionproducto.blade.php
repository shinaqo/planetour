@extends('layouts/principal')
@section('contenido')
<style>
	li {
  list-style: disc!important;
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

  <div class="slider" ">
    <ul class="slides" >
		@foreach($data as $row)
      <li>
        <img src="{!! asset('images')!!}/slider/{{$row->carpeta}}/{{$row->src}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
		@endforeach
    </ul>
  </div>
      

<div class="container">
	

	<div class="container2">

		<?php
		echo $producto->descripcion_producto;
		?>
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
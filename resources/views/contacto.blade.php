@extends('layouts/principal')
@section('contenido')

<div class="carousel carousel-slider">
	@foreach($data as $row)
	<a class="carousel-item" href="#one!"><img class="responsive-img" src="images/{{$row->ubicacion_carousel}}"></a>
	@endforeach
</div>
<div class="container">
	<div class="row">
		<div class="col s12 m12 l12 xl12 ">
			<h3 class="titulo-card">SI NECESITAS CONTACTARNOS
			<br>
		AQUÍ TE DEJAMOS NUESTRA INFORMACIÓN</span>.</h3>
	</div>
	<div class="col s3 m3 l3 xl3"></div>
	<div class="col s2 m2 l2 xl2 contactarnos">
		<img class="responsive-img" src="empresa/ICO001.png" >
		<span class="texto"   style="">+(56)9 564 949 51 <br>	 (51)2 758 956</span>
	</div>	
	<div class="col s2 m2 l2 xl2 contactarnos">
		<img class="responsive-img" src="empresa/ICO002.png" >
		<span class="texto"  >contacto@planetour.cl</span>
	</div>	
	<div class="col s2 m2 l2 xl2 contactarnos">
		<img class="responsive-img" src="empresa/ICO003.png" >
		<span class="texto">  Poratl Amunategui, Amunategui 489, Oficina 409, La Serena, Chile</span>
	</div>	
	<div class="col s3 m3 l3 xl3"></div>
</div>
</div>


<div class="container2" ">
	<div class="row" ">
		<div class="col s12 m12 l12 xl12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.410847436073!2d-71.25364998494703!3d-29.910072181931394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca65f4bb3797%3A0x12bac26cb3df062c!2sCortinajes+El+Telar!5e0!3m2!1ses-419!2scl!4v1540263206124" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> 
	</div>
</div>



<script>
	$(document).ready(function(){

		$('.carousel.carousel-slider').carousel({
			fullWidth: true,
			// indicators: true,
			duration:700
			// }).height(500);
		});

		setInterval(function(){
			$('.carousel.carousel-slider').carousel('next');
		},6000);
	});

</script>
<style>
.indicator-item{
	padding: 10px;

}

</style>


@stop
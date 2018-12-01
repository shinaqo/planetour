@extends('layouts/principal')
@section('contenido')

	
<div class="banner-page">
	<div class="int-banner-page">
	</div>
</div>
<div class="container">
	<div class="nosotros">
		<div class="row">

			<div class="col s12 m12 l12 xl12 ">
				<h3 style="text-align: center;
				color: #FF4906;
				font-weight: bold;">BIENVENIDO A PLANETOUR VIAJES</h3>
				<span style="text-align: center!important;" >

					Nuestra empresa cuenta con un sólido liderazgo en la industria, es una importante agencia de viajes que, destaca su gran variedad de servicios relacionados con el turismo, por ofrecer una completa asesoría antes, durante y después del viaje, y por contar con una amplia cobertura de proveedores y profesionales expertos en la materia.
				</span>
				<div style="height: 10px">	</div>
				<span>	
					Nuestro equipo está compuesto por profesionales altamente calificados, dedicados a entregar una atención global, segura, confiable y personalizada de nuestros servicios, satisfaciendo las necesidades de nuestros clientes en sus viajes de placer, relajo, negocios y otros.
				</span>
			</div>
		</div>
	</div>
</div>
<div class="myv">
	<div class="m-q " style="height: 288px;">
    	<div class="center-mv">
			<h2 style="font-size: 20px;
margin: 20px 0;">MISIÓN</h2>
            <p><em>Lograr ser una de las empresas de viajes líder en el mercado del turismo, brindando un servicio de calidad como ya es costumbre y contar con más sucursales a nivel regional (entre la tercer y cuarta región), logrando satisfacer las necesidades de nuestros clientes, y superar las expectativas de los mismos.</em></p>
        </div>
    </div>
    <div class="v-q " style="height: 288px;">
    	<div class="center-mv">
			<h2 style="font-size: 20px;
margin: 20px 0;">VISIÓN</h2>
            <p><em>Entregar el mejor servicio personalizado con el fin de lograr la plena satisfacción de todos nuestros clientes, a tráves de la asesoría de primer nivel con profesionales de vasta experiencia en el mundo de los viajes, para que nuestros clientes reciban la mejor coordinación al momento de planificar un viaje ya sea familiar, en parejas o grupos especiales.</em></p>
        </div>
    </div>
    
    <div class="clear"></div>
    
</div>

<div class="container2-nosotros">
	<h1 class="titulo-valores">Nuestros Valores</h1>
	<div class="row">
		<img src="http://www.planetour.cl/wp-content/uploads/2017/10/entregamos1.png" scale="0">

		<img src="http://www.planetour.cl/wp-content/uploads/2017/10/entregamos2.png" scale="0">

		<img src="http://www.planetour.cl/wp-content/uploads/2017/10/entregamos3.png" scale="0">

		<img src="http://www.planetour.cl/wp-content/uploads/2017/10/entregamos4.png" scale="0">
		
	</div>
</div>

<div class="container">
	<h1 class="titulo-valores" style="text-align: center;">Nuestros equipo</h1>

	<div class="row">	
@foreach($data as $row)
		<div class="col s12 m6 l3 xl3"> 	

	<div class="single-equipo">
                <div class="circle-people">
                    <div class="int-circle-people">
                    	<img src="images/trabajador/{{$row->ubicacion_trabajador}}">
                    </div>
                </div>
                
                <span class="titulo-people">{{$row->nombre_trabajador}} {{$row->apellidoPa_trabajador}} {{$row->apellidoMa_trabajador}}</span>
                <span class="cargo-people">{{$row->cargo}}</span>
                <span class="mail-people"><a href="mailto:jefe@planetour.cl">{{$row->correo}}</a></span>
                <span class="tel-people"><a href="tel:+56998745632">{{$row->numero}}</a></span>
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
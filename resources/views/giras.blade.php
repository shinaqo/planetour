@extends('layouts/principal')

@section('contenido')

<style type="text/css">
     .section{
      padding-top: 4vw;
      padding-bottom: 4vw;
    }
    .tabs .indicator{
      background-color: #1a237e;
    }
    .tabs .tab a:focus, .tabs .tab a:focus.active{
      background: transparent;
    }
    .titi{
        font-family: 'levibrushregular', 'arial'!important;
    }
</style>


  
  <div class="carousel carousel-slider slider">
    <a class="carousel-item" href="#one!"><img src="images/slide2-1.jpg"></a>
  </div>    

<section>
    <div class="col s12 z-depth-5" style="height: 225px;background-color: rgba(232,78,28, 0.85);text-align: center;
vertical-align: middle;padding: 3em 0 0 3em">
        <h4 style="color: #ffffff;
font-family: 'roboto', sans-serif;
font-weight: normal;
letter-spacing: 1px;
text-shadow: 1px 3px 2px rgba(204, 204, 204, 0.7);
text-transform: uppercase;">¿Donde quieres vivir tu gira?</h4>
          <h5 class="light grey-text text-lighten-3">Los mejores destinos los encuentras aquí.</h5>
    </div>
</section>


 <!-- photo / grid -->
  <section class="container section scrollspy" id="photos">
    
   

    <?php $a=0; ?>
  @foreach($producto as $row2)
    
    @if($a==0)
    <div class="row">
      <div class="col s12 l4">
          <!-- <img src="https://www.viajesvina.com/wp-content/uploads/2017/10/parque-acuatico.jpg" alt="" class="responsive-img materialboxed"> -->
           <div class="example-1 card-viaje ">

        <div class="wrapper" style="background: url('images/portadas/{{$row2->portada_producto}}') center/cover no-repeat; min-height: 221px !important">

          <div class="date">
            <span class="day">{{$row2->dias_producto}}</span>
            <span class="month">Días</span>
          </div>
          <div class="date2">
            <span>desde</span>
            <span class="day">{{$row2->tipoMoneda_producto}}</span>
            <span class="month">{{$row2->precio_producto}}</span>
          </div>
        
        </div>
      </div>
      </div>
      <div class="col s12 l6 offset-l1">
        <h3 class="indigo-text text-darken-4"><a href="{{route('descripcionproducto.show',$row2->id_producto)}}">{{$row2->nombre_producto}}</a></h3>
        <p>{{$row2->caracteristicasGira_producto}}</p>
      </div>
    </div>
    <?php $a=1; ?>
    @else
    <div class="row">
      <div class="col s12 l4 offset-l1 push-l7">
          <!-- <img src="https://www.viajesvina.com/wp-content/uploads/2017/10/parque-acuatico.jpg" alt="" class="responsive-img materialboxed"> -->
           <div class="example-1 card-viaje ">

        <div class="wrapper" style="background: url('images/portadas/{{$row2->portada_producto}}') center/cover no-repeat; min-height: 221px !important">

          <div class="date">
            <span class="day">{{$row2->dias_producto}}</span>
            <span class="month">Días</span>
          </div>
          <div class="date2">
            <span>desde</span>
            <span class="day">{{$row2->tipoMoneda_producto}}</span>
            <span class="month">{{$row2->precio_producto}}</span>
          </div>
        
        </div>
      </div>
      </div>
      <div class="col s12 l6 offset-l1 pull-l5 right-align">
        <h3 class="indigo-text text-darken-4"><a href="{{route('descripcionproducto.show',$row2->id_producto)}}">{{$row2->nombre_producto}}</a></h3>
        <p>{{$row2->caracteristicasGira_producto}}</p>
      </div>
    </div>
    <?php $a=0; ?>
    @endif

@endforeach

 
  </section>


 <section class="section container2 scrollspy" id="services">
    <div class="row">
      <div class="col s12 l4">
        <h3 class="indigo-text text-darken-4 center">GIRAS DE ESTUDIOS PLANETOUR VIAJES</h3>
        <p>En Planetour Viajes tenemos una amplia gama de destinos de Giras para que tú y tus compañeros puedan tomar la mejor decisión, y que ese viaje tan esperado, sea una de las mejores experiencias de tú vida.
Camboriu, Cancún, Punta Cana, Orlando, Sur de Chile y Bariloche, Europa, y mucho más, están esperando por tí.
Quieres que coordinemos una reunión?, sólo debes comunicarte con nosotros...
Porque Planetour Viajes, es tú mejor opción en Giras de Estudios.</p>
      </div>
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s4">
            <a href="#itinerario" class="active indigo-text text-darken-4">Itinerario</a>
          </li>
          <li class="tab col s4">
            <a href="#actividades" class="indigo-text text-darken-4">Actividades</a>
          </li>
           <li class="tab col s4">
            <a href="#asistencia" class="indigo-text text-darken-4">Asistencia</a>
          </li>
        </ul>

        <div id="itinerario" class="col s12">
            <p class="flow-text indigo-text text-darken-4">La mayor Seguridad</p>
            <p>Trabajamos con Assist Card siendo el mejor seguro de asistencia en viaje, para cada pasajero, destacando que somos los únicos que contamos con Clínica en Bariloche, ante cualquier urgencia presentada, ya sea en las actividades que realicen o estando en el destino, trabajamos además con la Clínica Alemana de Osorno y Valdivia. Nuestra gran preocupación es la seguridad de nuestros clientes, todas las mañanas y noches tenemos rondas médicas en los hoteles y contamos con ambulancia en todas las actividades.</p>
        </div>
        <div id="actividades" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Las mejores Actividades</p>
            <p>Contamos con actividades todos los días, para que los estudiantes no tengan tiempos libres, todas las actividades mencionadas en nuestros programas están incluidas, tenemos las mejores actividades al gusto de los estudiantes, entre ellas; Bowling, Cena y Fiesta de Bienvenida en Complejo Los Manantiales en los Saltos del Laja, Fábrica de Chocolate, Onces Alemanas, Subida en Aerosilla, Tobogán Gigante, Fourtrack (motos 4x4), Skate a motor, Arborismo, Tirolesa, Deslizadores acuáticos, Wáter Roller, Paintball, Canopy, Zipline, Extreme Camp (rancho viejo w, juegos de supervivencia), Discotheque Acuática, Catamarán en Valdivia, Cena navegable a bordo del Catamarán y Fiesta de Gala en el mismo Barco, ubicado en Valdivia, Termas de Aguas Calientes en Puyehue, entre otras. Dependiendo del programa a elegir.</p>

        </div>
         <div id="asistencia" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Unas Fiestas inolvidables</p>
            <p>Las Discotheques con las cuales nosotros trabajamos son exclusivamente para estudiantes las cuales están certificadas y calificadas por estándares de calidad y seguridad. Contamos con fiestas todas las noches, para mantener a nuestro grupo unido, de esta forma no tienen noches libres.</p>
        </div>
        </div>
      </div>
    </div>
  </section>

  <script>
  $(document).ready(function(){

    $('.carousel.carousel-slider').carousel({
      fullWidth: true,  
      indicators: false,
      duration:700,
      // }).height(500);
    });

    setInterval(function(){
      $('.carousel.carousel-slider').carousel('next');
    },6000);
  });
 $(document).ready(function(){
    $('.tabs').tabs();
  });
      
</script>   


<script>
    $(document).ready(function(){

      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.datepicker').datepicker({
        disableWeekends: true,
        yearRange: 1
      });
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();

    });
  </script>
@endsection

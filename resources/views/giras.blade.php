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
    
   

    <?php
    $a=0;
    ?>
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
        <h3 class="indigo-text text-darken-4">{{$row2->nombre_producto}}</h3>
        <p>{{$row2->caracteristicasGira_producto}}</p>
      </div>
    </div>
    <?php
    $a=1;
    ?>
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
        <h3 class="indigo-text text-darken-4">{{$row2->nombre_producto}}</h3>
        <p>{{$row2->caracteristicasGira_producto}}</p>
      </div>
    </div>
    <?php
    $a=0;
    ?>
    @endif

@endforeach

 
  </section>


 <section class="section container scrollspy" id="services">
    <div class="row">
      <div class="col s12 l4">
        <h2 class="indigo-text text-darken-4">What I do..</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
        <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
      </div>
      <div class="col s12 l6 offset-l2">
        <!-- tabs -->
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#photography" class="active indigo-text text-darken-4">Photography</a>
          </li>
          <li class="tab col s6">
            <a href="#editing" class="indigo-text text-darken-4">Editing</a>
          </li>
        </ul>
        <div id="photography" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Photography</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
        </div>
        <div id="editing" class="col s12">
            <p class="flow-text indigo-text text-darken-4">Editing</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
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

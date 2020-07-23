@extends('layouts/principal')
@section('contenido')



  <h1 style="text-align: center; color: #3997fe!important " class="font-x4 font-brush">Lineas Aereas</h1>
  <div class="carousel carousel-colaboradores">
  @foreach($data as $row)
    @if ($row->categoria ===0)
    <a class="carousel-item" href="#one!"><img src="images/colaborador/{{$row->ubicacion}}"></a>
    @endif
  @endforeach   
  </div>

  <h1 style="text-align: center;color: #FF4906!important" class="font-x4 font-brush">Seguros de viaje</h1>
  <div class="carousel carousel-colaboradores" >
      @foreach($data as $row)
    @if ($row->categoria ===1)
    <a class="carousel-item" href="#one!"><img src="images/colaborador/{{$row->ubicacion}}"></a>
    @endif
  @endforeach 
  </div>

  <h1 style="text-align: center;color: #3997fe" class="font-x4 font-brush">Cadenar Hoteleras</h1>
  <div class="carousel carousel-colaboradores" >
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

  <h1 style="text-align: center;color: #FF4906"class="font-x4 font-brush">Operadores de turismo Chile</h1>
  <div class="carousel carousel-colaboradores" >
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

  <h1 style="text-align: center;color: #3997fe"class="font-x4 font-brush">Operadores de turismo extrangeras</h1>
  <div class="carousel carousel-colaboradores" >
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>

   <h1 style="text-align: center;color: #FF4906"class="font-x4 font-brush">Cruceros</h1>
  <div class="carousel carousel-colaboradores" >
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
  </div>
      
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      dist:0,
      padding:5,
    });

    setInterval(function(){
      $('.carousel').carousel('next');
    },6000);



  });
</script>

@stop
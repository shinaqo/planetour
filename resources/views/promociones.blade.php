@extends('layouts/principal')
@section('contenido')
<style>
body{
  background-image: url('images/sunset.jpg')!important;
  background-attachment: fixed;

}
</style>

<div class="titlesection">
  <div class="dividerheight10"></div>
  <h1 class="bienvenido">PROMOCIONES EMOCIONANTES</h1>
  <h4 style="color: #fff;">Aprovecha y Viaja ahora mismo</h4>
</div>

@foreach($producto as $row2)

<!-- <div class="fondo3 z-depth-5" style="margin-bottom: 50px;background-image: url('http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png')">
    <div class="su-spacer" style="height:50px">
        
    </div>
    <div class="tituloFondo">
        <a class="linkFondo" href="http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png">{{$row2->nombre_producto}} {{$row2->dias_producto}} Días</a></div>
        <div class="btnPromo">
            <center>
                <a href="tel:+56956494951" class="su-button su-button-style-flat miBoton" style="color:#FFFFFF;background-color:#FF4906;border-color:#cc3a05;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px" target="_self">
                    <span class="cambia" style="color:#FFFFFF;padding:0px 24px;font-size:18px;line-height:36px;border-color:#ff8051;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"> 
                        LLÁMANOS
                    </span>
                </a> 
                <a href="http://www.planetour.cl/contacto/" class="su-button su-button-style-flat miBoton" style="color:#FFFFFF;background-color:#FF4906;border-color:#cc3a05;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px" target="_self">
                    <span  class="cambia" style="color:#FFFFFF;padding:0px 24px;font-size:18px;line-height:36px;border-color:#ff8051;border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"> 
                        ESCRÍBENOS
                    </span>
                </a>
            </center>
        </div>

    </div>
  -->
  <div class="px-2 lg:px-5">
    <a class="content block mb-5 max-w-2xl mx-auto" href="/blog/laracon-wizards-lawnmowers-hovercrafts">
      <div class="bg-grey-darker text-white h-screen-1/2 relative rounded lg:rounded-lg hover-lift overflow-hidden" style="background-color: #5b3b86">
        <img src="http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png" alt="" class="mix-none pin absolute opacity-50 fit h-full w-full">
        <div class="absolute h-full w-full z-10 flex items-center text-center">
          <div class="flex-1 p-3">
            <h6 class="font-subheading mb-2 text-lg opacity-50 tracking-wide">August 11th, 2016</h6>
            <h2 class="font-heading text-3xl lg:text-4xl font-normal antialiased leading-none m-0">Wizards, Lawnmowers, and Hovercrafts</h2>

          </div>
        </div>
        <p class="absolute pin-b pin-l pin-r m-3 w-full text-center opacity-50 font-subheading">creativity, Design, Development, and writing</p>
      </div>
    </a>

</div>

<div class="px-2 lg:px-5">
    <a class="content block mb-5 max-w-2xl mx-auto" href="/blog/laracon-wizards-lawnmowers-hovercrafts">
      <div class="bg-grey-darker text-white h-screen-1/2 relative rounded lg:rounded-lg hover-lift overflow-hidden" style="background-color: #5b3b86">
        <img src="http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png" alt="" class="mix-none pin absolute opacity-50 fit h-full w-full">
        <div class="absolute h-full w-full z-10 flex items-center text-center">
          <div class="flex-1 p-3">
            <h6 class="font-subheading mb-2 text-lg opacity-50 tracking-wide">August 11th, 2016</h6>
            <h2 class="font-heading text-3xl lg:text-4xl font-normal antialiased leading-none m-0">Wizards, Lawnmowers, and Hovercrafts</h2>

          </div>
        </div>
        <p class="absolute pin-b pin-l pin-r m-3 w-full text-center opacity-50 font-subheading">creativity, Design, Development, and writing</p>
      </div>
    </a>

</div>

<div class="px-2 lg:px-5">
    <a class="content block mb-5 max-w-2xl mx-auto" href="/blog/laracon-wizards-lawnmowers-hovercrafts">
      <div class="bg-grey-darker text-white h-screen-1/2 relative rounded lg:rounded-lg hover-lift overflow-hidden" style="background-color: #5b3b86">
        <img src="http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png" alt="" class="mix-none pin absolute opacity-50 fit h-full w-full">
        <div class="absolute h-full w-full z-10 flex items-center text-center">
          <div class="flex-1 p-3">
            <h6 class="font-subheading mb-2 text-lg opacity-50 tracking-wide">August 11th, 2016</h6>
            <h2 class="font-heading text-3xl lg:text-4xl font-normal antialiased leading-none m-0">Wizards, Lawnmowers, and Hovercrafts</h2>

          </div>
        </div>
        <p class="absolute pin-b pin-l pin-r m-3 w-full text-center opacity-50 font-subheading">creativity, Design, Development, and writing</p>
      </div>
    </a>

</div>

<div class="px-2 lg:px-5">
    <a class="content block mb-5 max-w-2xl mx-auto" href="/blog/laracon-wizards-lawnmowers-hovercrafts">
      <div class="bg-grey-darker text-white h-screen-1/2 relative rounded lg:rounded-lg hover-lift overflow-hidden" style="background-color: #5b3b86">
        <img src="http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png" alt="" class="mix-none pin absolute opacity-50 fit h-full w-full">
        <div class="absolute h-full w-full z-10 flex items-center text-center">
          <div class="flex-1 p-3">
            <h6 class="font-subheading mb-2 text-lg opacity-50 tracking-wide">August 11th, 2016</h6>
            <h2 class="font-heading text-3xl lg:text-4xl font-normal antialiased leading-none m-0">Wizards, Lawnmowers, and Hovercrafts</h2>

          </div>
        </div>
        <p class="absolute pin-b pin-l pin-r m-3 w-full text-center opacity-50 font-subheading">creativity, Design, Development, and writing</p>
      </div>
    </a>

</div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  @endforeach

  @stop
@extends('layouts/principal')
@section('contenido')

<div class="banner-page">
  <div class="int-banner-page-contacto">
  </div>
</div>




<div class="contactos-iconos">
  <div class="row">
    <div class="col s12 m12 l12 xl12 ">
      <h3 class="titulo-card">SI NECESITAS CONTACTARNOS
        <br>
      AQUÍ TE DEJAMOS NUESTRA INFORMACIÓN</span>.</h3>
    </div>
    <div class="col   l3 xl3"></div>
    <div class="col s12 m12 l2 xl2 contactarnos">
      <img class="responsive-img" src="empresa/ICO001.png" >
      <div class="row">
        <div class="col s12 m12 l12 xl12">
          <span class="texto"   style="">+(56)9 564 949 51</span>
        </div>
        <div class="col s12 m12 l12 xl12">
          <span class="texto">+(51)2 758 956</span>
        </div>
      </div>
    </div>  
    <div class="col s12 m12 l2 xl2 contactarnos">
      <img class="responsive-img" src="empresa/ICO002.png" >
      <div class="col s12 m12 l12 xl12">
        <span class="texto">contacto@planetour.cl</span>
      </div>
    </div>  
    <div class="col s12 m12 l2 xl2 contactarnos">
      <img class="responsive-img" src="empresa/ICO003.png" >
      <div class="row">
        <span class="texto">  Portal Amunategui, Amunategui 489, Oficina 409, La Serena, Chile</span>
      </div>
    </div>  
    <div class="col   l3 xl3"></div>
  </div>  
</div>


<div class="container2" ">
  <div class="row" ">
    <div class="col s12 m12 l12 xl12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.410847436073!2d-71.25364998494703!3d-29.910072181931394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691ca65f4bb3797%3A0x12bac26cb3df062c!2sCortinajes+El+Telar!5e0!3m2!1ses-419!2scl!4v1540263206124" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> 
  </div>
</div>




<div class="myv">

  <div class="m-q contacto dif" style="height: 288px;">
    <div class="center-mv">
      <div class="row control-contacto" style="padding: 20px">
        <div class="col s12 m12">
          <div class="card card-contacto">
            <div class="card-content ">
              <h2>CONTACTO</h2>
              <form class="form-horizontal" method="post" onsubmit="return validar_envio();">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                <div class = "alert alert-success">
                  {{ session ('status') }}
                </div>
                <script>
                 $(document).ready(function(){


                   var toastHTML = '<span>Mensaje enviado de forma satisfactoria! </span><button class="btn-flat toast-action">Ok</button>';
                   M.toast({html: toastHTML, classes: 'rounded green accent-3',displayLength:16000
                 });

                 });

               </script>
               @endif
               <input type="hidden" name="_token" value="{!! csrf_token() !!}">

               <div class="row cont">
                <div class="input-field col s12 m12 l12 xl6">
                  <input value="" id="name" name="name" type="text" class="validate">
                  <label class="active" for="name"><i class="material-icons">account_circle</i>Nombre</label>
                </div>
                <div class="input-field col s12 m12 l12 xl6">
                  <input value="" id="email" name="email" type="email" class="validate">
                  <label class="active" for="email"><i class="material-icons">mail</i>Mail</label>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea2" name="mensaje" class="materialize-textarea" data-length="120"></textarea>
                    <label for="textarea2"><i class="material-icons">message</i>Mensaje</label>
                  </div>
                </div>
                <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i>
                </button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="v-q contacto" style="height: 288px;">
  <div class="int-datos ">
    <h2>CONTACTO</h2>
    <span class="tel">
      <i class="material-icons">phone</i>
    Teléfono:  (51) 2 758 956            </span>
    <span class="mail">
      <i class="material-icons">email</i>
    E-mail: contacto@planetour.cl            </span>
    <span class="dir">
      <i class="material-icons">location_on</i>
    Dirección: Portal Amunategui, Amunategui 489, Oficina 409, La Serena Chile.            </span>
  </div>
</div>


</div>

<script>
  
 $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
  
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
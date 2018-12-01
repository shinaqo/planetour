@extends('layouts/principal')
@section('contenido')

<!-- <div class="carousel carousel-slider">
    @foreach($data as $row)
    <a class="carousel-item" href="#one!"><img class="responsive-img" src="images/{{$row->ubicacion_carousel}}"></a>
    @endforeach
</div> -->

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
        <span class="texto"   style="">+(56)9 564 949 51</span>
        <span class="texto">+(51)2 758 956</span>
    </div>  
    <div class="col s12 m12 l2 xl2 contactarnos">
        <img class="responsive-img" src="empresa/ICO002.png" >
        <span class="texto"  >contacto@planetour.cl</span>
    </div>  
    <div class="col s12 m12 l2 xl2 contactarnos">
        <img class="responsive-img" src="empresa/ICO003.png" >
        <span class="texto">  Poratl Amunategui, Amunategui 489, Oficina 409, La Serena, Chile</span>
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
    <div class="m-q contacto" style="height: 288px;">
        

        <div class="center-mv">
              <div class="row" style="padding: 20px">
    <div class="col s12 m12">
        <div class="card card-contacto">
        <div class="card-content">
         
  <form id="formularioCrear" method="post" action="/usuario">
    
  
  <div class="row cont">
    <div class="input-field col s6">
      <input value="" id="name" name="name" type="text" class="validate">
      <label class="active" for="name"><i class="material-icons">account_circle</i>Nombre</label>
    </div>
    <div class="input-field col s6">
      <input value="" id="email" name="email" type="email" class="validate">
      <label class="active" for="email"><i class="material-icons">mail</i>Mail</label>
    </div>
     <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2"><i class="material-icons">message</i>Mensaje</label>
          </div>
        </div>
      
   
    
  <button class="btn waves-effect waves-light right" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        
  </div>
        
<!-- 
         <div class="input-field">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email">
            <label for="email">Your Email</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">message</i>
            <textarea id="message" class="materialize-textarea" cols="20" rows="20"></textarea>
            <label for="message">Your Message</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">date_range</i>
            <input type="text" id="date" class="datepicker">
            <label for="date">Choose a date you need me for...</label>
          </div>
          <div class="input-field">
            <p>Services required:</p>
            <p>
              <label>
                <input type="checkbox">
                <span>Photography</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox">
                <span>Photo Editing</span>
              </label>
            </p>
          </div>
          <div class="input-field center">
            <button class="btn">Submit</button>
          </div> -->
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
    
    <div class="clear"></div>
    
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
    $('input#input_text, textarea#textarea2').characterCounter();

    });

</script>
<style>
.indicator-item{
    padding: 10px;

}

</style>


@stop
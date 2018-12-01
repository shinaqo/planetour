@extends('layouts/principal')
@section('contenido')
<style>
.fondo{
}
.fondo3 {
    background-size: 100%;
    background-repeat: no-repeat;       
    height: 350px;
    font-size: 55px;
    color: #ffffff;
    text-align: center;
    font-family: verdana;
    font-weight: bold;
}
.su-spacer {
    display: block;
    height: 0;
    clear: both;
    overflow: hidden;
}
.tituloFondo {
    margin-top: 70px;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
}

.su-button {
    display: inline-block !important;
    text-align: center;
    text-decoration: none !important;
    -webkit-box-sizing: content-box !important;
    box-sizing: content-box !important;
    -webkit-transition: all .2s;
    transition: all .2s;
}
.miBoton {
    border: none;
    width: 170px;
    font-size: 16px;
}
a.linkFondo:hover{
color: #FF4906!important;
}
span.cambia:hover{
color: black!important;
}
@media (max-width: 600px) {
 .su-spacer {
 height: 0px!important;
}
.linkFondo{
    font-size: 30px;
}

}
@media (max-width: 1400px) {
.fondo3{
    background-size: cover; 
}
}

.dividerheight10 {
    height: 10px;
    width: 100%;
    float: left;
}
.titlesection {
    text-align: center;
}
.titlesection h1 {
    text-align: center;
    color: #FF4906;
    font-size: 47px;
    font-family: arial;
    font-weight: bold;
}
.bienvenido {
    font-size: 40px;
    font-family: arial;
    font-weight: bold;
    color: #FF4906;
    text-align: center;
    margin-bottom: 25px;
}
h1 {
    color: #5e6d81;
    font-size: 30px;
    margin: 0px;
        margin-bottom: 0px;
    padding: 0px;
    font-weight: 600;
}
</style>
    
<div class="titlesection ">
<div class="dividerheight10"></div>
<h1 class="bienvenido">PROMOCIONES EMOCIONANTES</h1>
<h4 style="color: #5e6d81;">Aprovecha y Viaja ahora mismo</h4>
</div>

  @foreach($producto as $row2)

<div class="fondo3 z-depth-5" style="margin-bottom: 50px;background-image: url('http://www.planetour.cl/wp-content/uploads/2017/10/promo1-min.png')">
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

@endforeach
    @stop
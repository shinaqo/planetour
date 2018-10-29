<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li ><a href="#!">Sudamerica</a></li>
  <li class="divider"></li>
  <li><a href="#!">Caribe</a></li>
  <li class="divider"></li>
  <li><a href="#!">Norte america</a></li>
  <li class="divider"></li>
  <li><a href="#!">Europa</a></li>
  <li class="divider"></li>
  <li><a href="#!">Chile</a></li>
  <li class="divider"></li>
  <li><a href="#!">Destinos lejanos</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content" style="background-color: #FF4906;">
  <li ><a style="color: white" href="#!">Sudamerica</a></li>
  <li class="divider"></li>
  <li><a href="#!">Caribe</a></li>
  <li class="divider"></li>
  <li><a href="#!">Norte america</a></li>
  <li class="divider"></li>
  <li><a href="#!">Europa</a></li>
  <li class="divider"></li>
  <li><a href="#!">Chile</a></li>
  <li class="divider"></li>
  <li><a href="#!">Destinos lejanos</a></li>
</ul>
<nav  class="navegador">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo"><img src="empresa/Logo-Planetour-png_2.png"  alt="" width="50%" height="50%"></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="/">Home</a></li>
      <li><a href="nosotros">Nosotros</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Programa<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="#!">Promocios</a></li>
      <li><a href="#!">Giras de Estudio</a></li>
      <li><a href="contacto">Contacto</a></li>
      <li><a href="login"><i class="material-icons">account_circle</i></a></li>
    </ul>
  </div>
</nav>
 

<ul class="sidenav" id="mobile-demo">
      <li><a href="/">Home</a></li>
      <li><a href="nosotros">Nosotros</a></li>
      <li><a class="dropdown-trigger2" href="#!" data-target="dropdown2">Programa<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="#!">Promocios</a></li>
      <li><a href="#!">Giras de Estudio</a></li>
      <li><a href="#!">Contacto</a></li>
  </ul>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.dropdown-trigger2').dropdown();
  });
</script>
@yield('contenido')
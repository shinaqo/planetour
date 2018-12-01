<!-- Dropdown Structure -->
<!-- <ul id="dropdown1" class="dropdown-content">
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
</ul> -->
    
<ul id="dropdown1" class="dropdown-content">
 @foreach($categorias as $cat)
  <li ><a href="{{route('destinos.show',$cat->id_categoria)}}">{{$cat->nombre_categoria}}</a></li>
  @endforeach
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

<div class="navbar-fixed">
<nav  class="navegador navbar-fixed">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo"><img src="{!! asset('empresa') !!}/Logo-Planetour-png_2.png"  alt="" width="50%" height="50%"></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{!! asset('/') !!}">Home</a></li>
      <li><a href="{!! asset('nosotros') !!}">Nosotros</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Programa<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="{!! asset('promociones') !!}">Promociones</a></li>
      <li><a href="{!! asset('giras') !!}">Giras de Estudio</a></li>
      <li><a href="{!! asset('contacto') !!}">Contacto</a></li>
      <li><a href="{!! asset('login') !!}"><i class="material-icons">account_circle</i></a></li>
    </ul>
   <!--  <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal">
        <span style="color: white!important"> Miércoles 31 de Octubre del 2018 / Valor Dólar: $689 / Valor Dólar Crédito: $699
</span>
      </a>   -->
  </div>
</nav>
</div>

<ul class="sidenav" id="mobile-demo">
      <li><a href="/">Home</a></li>
      <li><a href="nosotros">Nosotros</a></li>
      <li><a class="dropdown-trigger2" href="#!" data-target="dropdown2">Programa<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="#!">Promociones</a></li>
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
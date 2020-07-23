<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!-- el error esta aqui  -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
  <script src='http://cloud.tinymce.com/5-testing/tinymce.min.js'></script>








  <!-- CORE CSS-->    
  <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"> -->


  <link rel="stylesheet" href="{!! asset('css/estilo-card.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/estilo-nav-left.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/fonts.css') !!}">

  
<script src="{!! asset('js/validar_admin.js') !!}"></script>  
  
  <style>
  header, main, footer {
    padding-left: 300px;
  }

  @media only screen and (max-width : 992px) {
    header, main, footer {
      padding-left: 0;
    }
  }

</style>
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <nav class="navegador navbar-fixed">
      <div class="nav-wrapper">
        <div class="row">
          <div class="col s12">
            <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
            <a href="{!! asset('home') !!}" class="brand-logo"><img src="{!! asset('empresa') !!}/Logo-Planetour-png_.png"  alt="" width="50%" height="50%"></a>

            <!-- <a href="#" data-target="sidenav-2" class="right sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a> -->
          </div>
        </div>
      </div>
    </nav>
  </header>

  


  <!-- LEFT SIDEBAR  -->
  <ul id="sidenav-1" class="sidenav sidenav-fixed">
   <li><div class="user-view">
    <div class="background">
      <img src="http://materializecss.com/images/office.jpg">
    </div>
    <a href="#!user"><img class="circle" src="{!! asset('images/trabajador') !!}/1542414158avatar-7.png"></a>
    <a href="#!name"><span class="white-text name">(Administrador)</span></a>

    <a href="#!email"><span class="white-text email">{{Auth::user()->email}}</span></a>
    <a class="white-text cerrar-sesion" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
</div></li>
<li class="bold"><a href="{!! asset('carousel') !!}" class="waves-effect waves-cyan"><i class="material-icons">dashboard</i> Carousel</a></li>
<li class="bold"><a href="{!! asset('trabajador') !!}" class="waves-effect waves-cyan"><i class="material-icons">assignment_ind</i>Personal</a></li>
<li class="bold"><a href="{!! asset('cargo') !!}" class="waves-effect waves-cyan"><i class="material-icons">playlist_add</i>Cargo</a></li>
<li class="bold"><a href="{!! asset('pais') !!}" class="waves-effect waves-cyan"><i class="material-icons">public</i>País</a></li>
<li class="bold"><a href="{!! asset('categoria') !!}" class="waves-effect waves-cyan"><i class="material-icons">category</i>Categoria</a></li>
<li class="bold"><a href="{!! asset('colaborador') !!}" class="waves-effect waves-cyan"><i class="material-icons">forum</i>Colaborador</a></li>
<li class="bold"><a href="{!! asset('user') !!}" class="waves-effect waves-cyan"><i class="material-icons">person_add</i>Usuario</a></li>

<ul class="collapsible">
  <li>
    <div class="collapsible-header"><i class="material-icons">flight_takeoff</i>Viaje</div>
    <div class="collapsible-body" style="background-color: #FF4906">

      <ul>
        <li>
          <a href="{!! asset('producto') !!}" class="waves-effect waves-cyan"><i class="material-icons" style="color: white">flight_takeoff</i>viaje</a>

        </li>
        <li>
          <a href="{!! asset('productocarousel') !!}" class="waves-effect waves-cyan"><i class="material-icons"  style="color: white">dashboard</i>Carousel viaje</a>

        </li>
      </ul>

    </div>
  </li>
</ul>



</ul>




<!-- RIGHT SIDEBAR   -->
<!-- <ul id="sidenav-2" class="sidenav">    
  <li><a class="subheader">Subheader</a></li>
  <li><a href="https://github.com/dogfalo/materialize/" target="_blank">Github</a></li>
  <li><a href="https://twitter.com/MaterializeCSS" target="_blank">Twitter</a></li>
  <li><a href="http://next.materializecss.com/getting-started.html" target="_blank">Docs</a></li>
</ul> -->


<main>
  @yield('content')

</main>


<script>
  $(document).ready(function(){
    $(".collapsible").collapsible();
  });
</script>

<script>
  $(document).ready(function(){
    $(".btn_menu").sideNav();
  });
</script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
    $('#sidenav-1').sidenav({ edge: 'left' });
    $('#sidenav-2').sidenav({ edge: 'right' });
  });
</script>

<script>
  $(document).ready(function(){
    $('.slider').slider();

  });
  $('.sidenav').sidenav();

  $('.dropdown-trigger').dropdown();

  tinymce.init({
    selector: '#descripcion_producto',
   plugins:'newdocument, bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, formatselect, fontselect, fontsizeselect, cut, copy, paste, bullist, numlist, outdent, indent, blockquote, undo, redo, removeformat, subscript, superscript table textcolor lists' ,
    table_default_attributes: {
    'class': 'striped',
  },
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | fontsizeselect forecolor backcolor"
  });

  tinymce.init({
    selector: '#importante_producto',
    plugins:'newdocument, bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, formatselect, fontselect, fontsizeselect, cut, copy, paste, bullist, numlist, outdent, indent, blockquote, undo, redo, removeformat, subscript, superscript table textcolor lists' ,
    table_default_attributes: {
    'class': 'striped',
  },
  toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | fontsizeselect forecolor backcolor  "

  });

    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

</script>
</html>



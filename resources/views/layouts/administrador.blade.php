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
  <script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>





  <!-- CORE CSS-->    
  <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
 

  <link rel="stylesheet" href="{!! asset('css/estilo-card.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/estilo-nav-left.css') !!}">

  

  

</head>

<body>
@extends('layouts/navbar-left')


<script>
  $(document).ready(function(){
    $('.slider').slider();
});
  $('.sidenav').sidenav();

  $('.dropdown-trigger').dropdown();

   tinymce.init({
    selector: '#descripcion_producto'
  });
   
</script>
</html>



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

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!-- el error esta aqui  -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

  <link rel="stylesheet" href="{!! asset('css/estilo-card.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/estilo-nav-left.css') !!}">
  

</head>
<body  >
@extends('layouts/footer')

 @extends('layouts/navbar')
 

</body>
<script>
  $(document).ready(function(){
   $('.slider').slider({ 
        full_width: false,
        height : 500, // default - height : 400
        interval: 6000 // default - interval: 6000
    });
  });

</script>
</html>



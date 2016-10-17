<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="Description" CONTENT="@yield('MetaContent')">

    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/app.css') }}">   
    <link rel="stylesheet" type="text/css" href=" {{ asset('Iconos/fonts/style.css')}}">
    <META name="robots" content="@yield('MetaRobot')">
  </head>
  <body>

   @include('layouts.user_layout.header.global')

   <div class="user-layout-contenedor">
        @yield('content')  
   </div>

   @include('layouts.user_layout.footer.footer-general')
   
      <!-- Scripts -->
      <script src="{{ asset('js/all.js')}}"></script>    
  </body>
</html>   
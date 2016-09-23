<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador Panel</title>
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/app.css') }}">   
    <link rel="stylesheet" type="text/css" href=" {{ asset('Iconos/fonts/style.css')}}">
    <META name="robots" content="NOINDEX,NOFOLLOW">
  </head>
  <body>

   @include('layouts.admin_layout.header.global')
   <div class="admin-contiene-columna-y-content">
      @include('layouts.admin_layout.columna_derecha.columna')
      <div class="admin-contiene-content">
        @yield('content')
      </div>
      
   </div>
      <!-- Scripts -->
      <script src="{{ asset('js/all.js')}}"></script>    
  </body>
</html>
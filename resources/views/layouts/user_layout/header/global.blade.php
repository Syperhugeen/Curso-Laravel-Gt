  <!--navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top" id="mynavbar">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="row">
      <div class="col-lg-10 col-lg-push-1">

      <div class="navbar-header">
        <div class="text-center"><!-- para centrar el navbar toggle button -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
        <a class="navbar-brand" href="{{route('get_home')}}"><img class="navbar-logo img-responsive" src="{{url()}}/imagenes/{{$Empresa->logo_cuadrado}}"></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-right navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li><a href="{{route('get_home')}}"><span class="glyphicon glyphicon-home"></span> INICIO </a></li>
          <li><a href="{{route('get_pagina_empresa')}}">LA EMPRESA</a></li>
          <li><a href="{{route('get_pagina_servicios')}}">SERVICIOS</a></li>
          <li><a href="{{route('get_pagina_proyecto_listado')}}">PROYECTOS</a></li>
          <li><a href="{{route('get_pagina_noticias_noticias_listado')}}">NOTICIAS</a></li>
          <li><a href="{{route('get_pagina_contacto')}}">CONTACTO</a></li>

          {{-- aqui pongo el tema de inicio de sesion y datos del user --}}
          @include('layouts.user_layout.header.auth')

          {{-- contenidos ocultos para mostrar con tooltips --}}
          <div style="display: none;">
             <div class="contenido-inicio-de-sesion-navbar">
              <h3>Inicio de sesión</h3>
              @include('formularios.auth.login_form')
             </div>
             
             {{-- contenido a mostrar de user deplsegado --}}
             @include('layouts.user_layout.header.partes.desplegado_user_auth')
              
          </div>

        </ul>       
      </div>    <!-- /.navbar-collapse -->


    </div>  <!-- /.col -->
    </div>  <!-- /.row -->
    </div> <!-- / container fluid row -->

    <!-- errores -->
     <div class="contendor-errores-header">      
      @include('partials.Alertas_Todos_Agrupados.alertas_agrupados')   
     </div>

    <!-- /.container-fluid -->
  </nav>
  <!-- /nav -->














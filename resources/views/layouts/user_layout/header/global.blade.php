  <!--navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top" id="mynavbar">
    <div class="container-fluid row">
      <!-- Brand and toggle get grouped for better mobile display -->

      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><img class="navbar-logo" src="{{url()}}/imagenes/{{$Empresa->logo_cuadrado}}"></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#home"><span class="glyphicon glyphicon-home"></span> INICIO<span class="sr-only">(current)</span></a></li>
          <li><a href="#acerca">LA EMPRESA</a></li>
          <li><a href="#servicios">SERVICIOS</a></li>
          <li><a href="#articulos">ARTÍCULOS</a></li>
          <li><a href="#contacto">CONTACTO</a></li>
        </ul>       
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.col -->
    </div>

    <!-- errores -->
     <div class="contendor-errores-header">      
      @include('partials.Alertas_Todos_Agrupados.alertas_agrupados')   
     </div>

    <!-- /.container-fluid -->
  </nav>
  <!-- /nav -->














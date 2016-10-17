<header class="Default-header">
 <div class="wrapper">
    {{-- imagen logo --}}

    <img class="Default-header-logo" src="{{url()}}/imagenes/{{$Empresa->logo_cuadrado}}">
    <div class="Default-header-titulo">     
     
    </div>

    @include('layouts.user_layout.header.nav_derecha.global')

      
     <!-- errores -->
     <div class="contendor-errores-header">      
      @include('partials.Alertas_Todos_Agrupados.alertas_agrupados')   
     </div>
  </div> 
</header>
<header class="admin-header">
    {{-- imagen logo --}}

    <img class="admin-header-logo" src="{{url()}}/imagenes/{{$Empresa->logo_cuadrado}}">
    <div class="admi-header-titulo">     
     
    </div>

      
     <!-- errores -->
     <div class="contendor-errores-header">      
      @include('partials.Alertas_Todos_Agrupados.alertas_agrupados')   
     </div>
</header>
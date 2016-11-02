
{{-- contenedor de la parte completa de proyectos en la home --}}

  {{-- titulo de seccion --}}
 <h2 class="home-section-title">ÚLTIMOS PROYECTOS</h2>


{{-- contiene hasta tres proyectos como máximo --}}
<div class="home-section-display">

      @foreach($Proyectos as $Proyecto)
        @include('paginas.proyecto.entidad_proyecto_para_listado')
      @endforeach

</div>
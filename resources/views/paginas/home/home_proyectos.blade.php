
{{-- contenedor de la parte completa de proyectos en la home --}}

  {{-- titulo de seccion --}}
 <h2 class="home-section-title">ÚLTIMOS PROYECTOS</h2>


{{-- contiene hasta dos proyectos como máximo --}}
<div class="home-section-display">

      @foreach($Proyectos as $Proyecto)
        @include('paginas.proyecto.entidad_proyecto_para_listado')
      @endforeach


	<div class="col-xs-12"><!-- ver más / ampliar / explorar -->
		<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver todos los eventos</h5>
	</div>


</div>
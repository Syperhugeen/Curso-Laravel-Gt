
{{-- contenedor de la parte completa de publicaciones en la home --}}

  {{-- titulo de seccion --}}
 <h2 class="home-section-title">ÚLTIMAS PUBLICACIONES</h2>


{{-- contiene hasta tres proyectos como máximo --}}
<div class="home-section-display">

      @foreach($Noticias as $Noticia)
       @include('paginas.noticias.entidad_noticia_para_listado')
      @endforeach

</div>
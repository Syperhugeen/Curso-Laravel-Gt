
{{-- contenedor de la parte completa de proyectos en la home --}}

  {{-- titulo de seccion --}}
 <h2 class="home-section-title">ÚLTIMOS PROYECTOS</h2>


{{-- contiene hasta tres proyectos como máximo --}}
<div class="home-section-display">

      @foreach($Proyectos as $Proyecto)
      <a href="{{$Proyecto->route}}"> 
        <div class="media home-section-display-item">
          <div class="media-left">
            <img class="media-object img-rounded" src="{{$Proyecto->url_img}}" alt="..."">
          </div>
          <div class="media-body">
            <h4 class="media-heading">{{$Proyecto->name}}</h4>
            <p>{{$Proyecto->description}}</p>
          </div>
        </div> 
      </a>
    <hr class="home-section-display-divider">
      @endforeach

</div>
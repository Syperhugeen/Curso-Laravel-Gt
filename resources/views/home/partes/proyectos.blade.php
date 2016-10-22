
{{-- contenedor de la parte completa de proyectos en la home --}}
<div style="color:white;">
  {{-- titulo de seccion --}}
 <div>Proyectos Destacados o Ultimos</div>
 {{-- contiene por ejemplo varios proyectos --}}
 <div>    
    @foreach($Proyectos as $Proyecto)
      {{-- contiene proyecto indivual --}}
      <a href="{{$Proyecto->route}}">
       <div style="color:white;">
        <img style="height: 50px;" src="{{$Proyecto->url_img}}">
        <span>{{$Proyecto->name}}</span>
        <span>{{$Proyecto->description}}</span>        
       </div>
      </a>
    @endforeach
 </div>  
</div>
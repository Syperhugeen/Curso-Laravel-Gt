
{{-- contenedor de la parte completa de proyectos en la home --}}
<div style="color:white;">
  {{-- titulo de seccion --}}
 <div>Proyectos Destacados o Ultimos</div>
 {{-- contiene por ejemplo varios proyectos --}}
 <div>    
    @foreach($Proyectos as $proyecto)
      {{-- contiene proyecto indivual --}}
      <a href="">
       <div style="color:white;">
        <img style="height: 50px;" src="{{$proyecto->url_img}}">
        <span>{{$proyecto->name}}</span>
        <span>{{$proyecto->description}}</span>        
       </div>
      </a>
    @endforeach
 </div>  
</div>
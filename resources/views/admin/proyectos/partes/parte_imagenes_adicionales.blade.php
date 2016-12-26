<div class="admin-entidad-contenedor-imagenes-y-form">
   @foreach($proyecto->imagenesproyecto as $img)
    <div class="admin-entidad-proyecto-img-adicionales-contenedor">
      <img class="admin-entidad-proyecto-img-adicionales" src="{{$img->url_img}}">
      <a href="{{route('delete_admin_proyectos_img',$img->id)}}" class="icono-eleminar-imagen"><span class="icon-clear" ></span></a>
      @if($img->foto_principal != 'si')
        <a href="{{route('establecer_como_imagen_principal',$img->id)}}" title="Establecer como imagen principal">
         <span class="glyphicon glyphicon-star-empty" ></span>
        </a>
      @else
        
         <span class="glyphicon glyphicon-star" ></span>
       
      @endif

    </div>
    
   @endforeach

   {!! Form::open(['route' => ['set_admin_proyectos_img',$proyecto->id],
                   'method'=> 'post',
                   'files' =>  true,
                   'id'    => 'form-admin-subir-img-proyectos',
                   'class' => 'admin-entidad-contenedor-imagenes-form-form'
                          ])               !!}
    
       
     {!! Form::file('img',['class' => 'admin-entidad-contenedor-imagenes-form-field']) !!} 

      <div class="boton-subir-img">Subir Imagen</div>   

   {!! Form::close() !!}
</div>
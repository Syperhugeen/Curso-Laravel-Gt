<div class="admin-entidad-contenedor-imagenes-y-form">
  


   @foreach($proyecto->imagenesproyecto as $img)
    <div class="admin-entidad-proyecto-img-adicionales-contenedor">
      <img class="admin-entidad-proyecto-img-adicionales" src="{{$img->url_img}}">
      <a href=""><span class="" ></span></a>
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
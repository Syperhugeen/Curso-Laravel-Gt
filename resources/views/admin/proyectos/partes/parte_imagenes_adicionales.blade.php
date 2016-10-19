

 @foreach($proyecto->imagenesproyecto as $img)
    <img class="admin-entidad-img" src="{{$img->url_img}}">
   @endforeach

   {!! Form::open(['route' => ['set_admin_proyectos_editar',$proyecto->id],
                   'method'=> 'patch',
                   'files' =>  true,
                   'id'    => 'form-admin-subir-img-proyectos',
                   'class' => 'contenedor-img-titulo'
                          ])               !!}
     <span class="icon-add_circle_outline"></span>
     <div class="formulario-label-fiel">     
     {!! Form::file('img',['class' => 'formulario-field']) !!}   
     </div>

     <div class="boton-subir-img">Subir Imagen</div>   

   {!! Form::close() !!}
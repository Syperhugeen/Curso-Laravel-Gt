<div style="padding: 5px; 
            margin-bottom: 20px; 
            border-radius: 4px; 
            background-color:#fff0ba ; 
            font-size: 20px;
            font-family: arial;
            font-weight: bold;
            color: #aa8749;
            display: table;">

            Cuidado Se Agoto ! ...

</div>

<div style="font-family: arial; font-size: 16px; display:inline-block;">
 <strong><a href="{{ route('admin_Producto_edit' , $producto->id )}}">{{$producto->name}}</a></strong>  id: {{$producto->id}} . 
</div>

<img    src="{{url()}}/imagenes/fotos/{{$producto->img}}"
      style="
      width: 75px;
      height: 75px;
      border-radius: 4px;
      border:solid 5px $Color-Errors-BG;
      display: inline-block;
      ">
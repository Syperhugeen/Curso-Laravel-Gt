

<ul class="bxslider">
  @foreach($Imagenes as $Imagen)
 <li><a href="{{$Imagen->url}}"><img src="{{$Imagen->UrlImg}}" title="{{$Imagen->name}}" /></a></li> 
  @endforeach
</ul>
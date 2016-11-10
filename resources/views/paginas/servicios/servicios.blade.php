@extends('layouts.user_layout.user_layout')


@section('title')
 Servicios
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

    	<div class="page-header">
        	<h1>Servicios</h1>
      	</div>
 

      	<div class="row space-bottom">

      		<div class="col-lg-6" style="padding-right:40px;border-right:5px solid $color-grey0;">
      			<h2 style="text-align:right">Breve texto irá aquí</h2>
      		</div>

      		<div class="col-md-6" style="padding-left:40px;">
      			<ul>
      				<a href="#servicio1"><li><h5>servicio1</h5></li></a>
      				<a href="#servicio2"><li><h5>servicio2</h5></li></a>
      				<a href="#servicio3"><li><h5>servicio3</h5></li></a>
      				<a href="#servicio4"><li><h5>servicio4</h5></li></a>
      				<a href="#servicio5"><li><h5>servicio5</h5></li></a>
      				<a href="#servicio6"><li><h5>servicio6</h5></li></a>
      			</ul>
      		</div>

      	</div>



      	<div id="servicio1" class="row space-bottom">

      	    <div class="col-md-6">
      			<img class="img-responsive img-rounded" src="imagenes/Img/metodo1.jpg">
      		</div>

      		<div class="col-md-6">
      			<h3>servicio 1</h3>
      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rhoncus massa at ipsum commodo convallis. Sed tempus sapien risus, pretium dignissim nibh suscipit ac. Suspendisse placerat turpis arcu, id aliquam sem volutpat eget. Mauris vulputate tristique nunc sit amet placerat. Integer vel venenatis urna. Phasellus laoreet libero mi, et vehicula tortor luctus et. Ut blandit in nisl id convallis.</p>
      		</div>

      	</div>



      	<div id="servicio2" class="row space-bottom">

      	    <div class="col-md-6">
      			<img class="img-responsive img-rounded" src="imagenes/Img/metodo1.jpg">
      		</div>

      		<div class="col-md-6">
      			<h3>servicio 2</h3>
      			<p>Nunc quam massa, volutpat sed purus nec, ultrices interdum tellus. Vestibulum condimentum, lorem at elementum tincidunt, nibh quam placerat lorem, luctus placerat arcu turpis nec odio. Pellentesque iaculis porttitor sagittis. Cras porttitor, tellus in pharetra fringilla, felis ligula vulputate nisl, vehicula eleifend eros purus ac massa. Aliquam elementum aliquet consequat. Maecenas vulputate nunc lacus, at euismod sem fringilla quis. Maecenas feugiat dignissim enim et condimentum.</p>
      			<p>Maecenas vel lacinia libero, ut faucibus velit. Donec consectetur odio elit, vel finibus dolor faucibus in. Sed venenatis, lectus ac fermentum viverra, leo justo porta augue, eget porttitor urna lorem dapibus enim. Nullam tincidunt leo et ex blandit, quis finibus odio tincidunt. Mauris ipsum nisi, pretium eget viverra eget, suscipit vel velit. Integer posuere elit non tellus cursus, ut mattis tellus fermentum. Donec a tristique ex, sit amet molestie orci. Aliquam malesuada lobortis libero, tincidunt efficitur diam mattis vestibulum. Aliquam feugiat eros et gravida auctor. Quisque semper accumsan tellus, non mollis ipsum pharetra ut. Proin vitae nisl sit amet purus dignissim auctor sed at odio. Suspendisse consequat felis nec orci luctus, quis pulvinar leo tincidunt. Maecenas id libero nisl. Vivamus eleifend enim urna, at vulputate purus gravida quis. Fusce malesuada mollis velit, et egestas orci blandit nec.</p>
      		</div>

      	</div>




      	<div id="servicio3" class="row space-bottom">

      	    <div class="col-md-6">
      			<img class="img-responsive img-rounded" src="imagenes/Img/metodo1.jpg">
      		</div>

      		<div class="col-md-6">
      			<h3>servicio 3</h3>
      			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rhoncus massa at ipsum commodo convallis. Sed tempus sapien risus, pretium dignissim nibh suscipit ac. Suspendisse placerat turpis arcu, id aliquam sem volutpat eget. Mauris vulputate tristique nunc sit amet placerat. Integer vel venenatis urna. Phasellus laoreet libero mi, et vehicula tortor luctus et. Ut blandit in nisl id convallis.</p>
      		</div>

      	</div>


      	<div id="servicio4" class="row space-bottom">

      	    <div class="col-md-6">
      			<img class="img-responsive img-rounded" src="imagenes/Img/metodo1.jpg">
      		</div>

      		<div class="col-md-6">
      			<h3>servicio 4</h3>
      			<p>Nunc quam massa, volutpat sed purus nec, ultrices interdum tellus. Vestibulum condimentum, lorem at elementum tincidunt, nibh quam placerat lorem, luctus placerat arcu turpis nec odio. Pellentesque iaculis porttitor sagittis. Cras porttitor, tellus in pharetra fringilla, felis ligula vulputate nisl, vehicula eleifend eros purus ac massa. Aliquam elementum aliquet consequat. Maecenas vulputate nunc lacus, at euismod sem fringilla quis. Maecenas feugiat dignissim enim et condimentum.</p>
      			<p>Maecenas vel lacinia libero, ut faucibus velit. Donec consectetur odio elit, vel finibus dolor faucibus in. Sed venenatis, lectus ac fermentum viverra, leo justo porta augue, eget porttitor urna lorem dapibus enim. Nullam tincidunt leo et ex blandit, quis finibus odio tincidunt. Mauris ipsum nisi, pretium eget viverra eget, suscipit vel velit. Integer posuere elit non tellus cursus, ut mattis tellus fermentum. Donec a tristique ex, sit amet molestie orci. Aliquam malesuada lobortis libero, tincidunt efficitur diam mattis vestibulum. Aliquam feugiat eros et gravida auctor. Quisque semper accumsan tellus, non mollis ipsum pharetra ut. Proin vitae nisl sit amet purus dignissim auctor sed at odio. Suspendisse consequat felis nec orci luctus, quis pulvinar leo tincidunt. Maecenas id libero nisl. Vivamus eleifend enim urna, at vulputate purus gravida quis. Fusce malesuada mollis velit, et egestas orci blandit nec.</p>
      		</div>

      	</div>






    <div> 
    {{-- boton para envio de curriculumn --}}
    @include('paginas.servicios.partes.click_aqui_envio_curriculumn')  
    </div>
    <div>
    {{-- boton para envio cotización de proyecto --}}
    @include('paginas.servicios.partes.click_aqui_envio_cotizacion_proyecto')
    </div>

    </div>  
  </div>
</div>

@stop
<!--este row es para las dos columnas de texto (bienvenidos y contact info)-->
<div class="row">
<!--columna izquierda-->
<div class="col-md-6 home-box">
<h1>Bienvenidos</h1>
<h4>Aquí podrás informarte acerca de los servicios que ofrecemos, ponerte en contacto con nosotros, y estar al tanto de los sucesos más relevantes del rubro.</h4>
</div>

<!--columna derecha-->
<div class="col-md-6 home-box">
<h2><span class="glyphicon glyphicon-envelope" style="font-size:120%; padding-right:10px;"></span>{{$Empresa->email}} </h2>
<h2><span class="glyphicon glyphicon-earphone" style="font-size:120%; padding-right:10px;"></span>{{$Empresa->telefono}}</h2>
<h2><span class="glyphicon glyphicon-phone" style="font-size:120%; padding-right:10px;"></span>{{$Empresa->celular}}</h2>
</div>
<!--/cierra el row-->
</div>
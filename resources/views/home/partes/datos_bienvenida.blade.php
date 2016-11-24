
<!--este row es para las dos columnas de texto (bienvenidos y contact info)-->
<div class="row">

<!--columna izquierda-->
<div class="col-md-6 home-box">
<h1 class="home-title-welcome">Bienvenidos</h1>
<h4>Brindamos soluciones profesionales, confiables y creativas utilizando diversas técnicas constructivas.</h4>
</div>

<!--columna derecha-->
<div class="col-md-5 pull-right home-box well well-lg" style="background-color:transparent;">
<h4><span class="glyphicon glyphicon-envelope" style="font-size:120%; padding-right:10px;""></span>{{$Empresa->email}}</h4>
<h4><span class="glyphicon glyphicon-earphone" style="font-size:120%; padding-right:10px;"></span>{{$Empresa->telefono}}</h4>
<h4><span class="glyphicon glyphicon-phone" style="font-size:120%; padding-right:10px;"></span>{{$Empresa->celular}}</h4>
</div>

<!--/cierra el row-->
</div>
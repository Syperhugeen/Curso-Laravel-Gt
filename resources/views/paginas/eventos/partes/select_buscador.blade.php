{!! Form::open( [ 'route' => 'get_pagina_eventos',
                  'method'=> 'get',
                  'class' => 'col-sm-12 text-center'
                          ])               !!}
          <select name="select_marcas_en_evento"  id="select_marcas_en_evento" class="selectpicker" data-live-search="true" style="width: 100%;">
           <option value="">Elige una marca para ver sus eventos</option>
           @foreach($Marcas as $Marca)
               <option  
                              value="{{$Marca->id}}"
                              data-content="<div class='Helper-OrdenarHijos-Row get_width_100 drop-select-contenedor Helper-OrdenarHijos-Row-space-around'><img src='{{$Marca->url_img}}' class='drop-select-contenedor-img'></div>"
                              data-tokens="{{$Marca->id}} {{$Marca->name}}">
                             

              {{$Marca->name}} 
              </option>
           @endforeach                  
          </select>    

{!! Form::close() !!}

{{-- <div class="buscador wow fadeInRight">
              <input type="text" class="buscador-input" placeholder="Buscar">
              <a href=""><div class="buscador-boton"><h4 class="text-center"><span class="glyphicon glyphicon-search"></span></h4></div></a>
</div> --}}
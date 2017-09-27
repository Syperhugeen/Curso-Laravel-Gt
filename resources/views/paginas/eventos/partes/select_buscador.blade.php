{!! Form::open( [ 'route' => 'get_pagina_eventos',
                  'method'=> 'get',
                  'class' => ''
                          ])               !!}
          <div class="buscador-boton">
          <h4><span class="glyphicon glyphicon-search"></span></h4>
          </div>

          <select name="select_marcas_en_evento"  id="select_marcas_en_evento" class="selectpicker" data-style="buscador-selector" data-live-search="true" style="width: 100%;">
           <option value=""><span class="glyphicon glyphicon-triangle-right"></span>Ver todas las marcas</option>
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
{!! Form::open( [ 'route' => 'get_pagina_eventos',
                  'method'=> 'get',
                  'class' => ''
                          ])               !!}

          {{-- aqui agrego los botones para quitar filtro y muestro el seleccionado   --}}


          <div class="buscador-boton">
          <h4><span class="glyphicon glyphicon-search"></span></h4>
          </div>

          <select name="select_marcas_en_evento"  id="select_marcas_en_evento" class="selectpicker" data-style="buscador-selector" data-live-search="true" style="width: 100%;" data-size="6">
           <option value=""><span class="glyphicon glyphicon-triangle-right"></span>Selecciona una marca aquí</option>
           @foreach($Marcas as $Marca)
               <option  
                              value="{{$Marca->id}}"
                              data-content="<div class='Helper-OrdenarHijos-Row get_width_100 drop-select-contenedor Helper-OrdenarHijos-Row-space-around'><img src='{{$Marca->url_img}}' class='drop-select-contenedor-img'></div>"
                              data-tokens="{{$Marca->id}} {{$Marca->name}}">
                             

              {{$Marca->name}} 
              </option>
           @endforeach                  
          </select>    


          @if($Marca_seleccionada != '')
              <div class="Helper-OrdenarHijos-columna get_width_100">
                <div class="contenedor-img-seleccionada-filtro-eventos Helper-OrdenarHijo-columna-self-left">
                  <img class="img-seleccionada-filtro-eventos" src="{{$Marca_seleccionada->url_img}}">
                  <span class="img-seleccionada-filtro-eventos-remove">                   
                     <a href="{{route('get_pagina_eventos')}}"><h4><span class="glyphicon glyphicon-remove"></span></h4></a> 
                  </span>
                </div>
                <!-- <div class="Helper-OrdenarHijo-columna-self-left Helper-Fuente-Clara Helper-Fuente-10px">seleccionada</div> -->
              </div>
            @endif
          {{-- fin de : aqui agrego los botones para quitar filtro y muestro el seleccionado --}}  



{!! Form::close() !!}
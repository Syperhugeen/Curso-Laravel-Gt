<?php 


//Marcas
Route::get('/Galeria' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_eventos',
  'as'   => 'get_pagina_eventos']
); 


Route::get('/evento-{name}-{id}' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_evento_individual',
  'as'   => 'get_pagina_evento_individual']
);


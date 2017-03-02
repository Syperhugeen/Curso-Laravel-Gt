<?php 

//Marcas
Route::get('/Marcas' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_marcas',
  'as'   => 'get_pagina_marcas']
); 


Route::get('/eventos-de-{name}-{id}' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_marca_individual',
  'as'   => 'get_pagina_marca_individual']
);
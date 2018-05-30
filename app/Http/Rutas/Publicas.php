<?php 


require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';

require __DIR__ . '/Proyectos/Rutas_Proyectos_Publicas.php';

require __DIR__ . '/Eventos/Rutas_Eventos_Publicas.php';

require __DIR__ . '/Marcas/Rutas_Marcas_Publicas.php';

require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';




//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Nosotros' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);






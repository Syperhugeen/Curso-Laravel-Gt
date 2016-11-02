<?php 





//Ruta de Home
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Controller@get_home',
  'as'   => 'get_home']
);


//Contacto
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

//Empresa
Route::get('/Empresa' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_empresa',
  'as'   => 'get_pagina_empresa']
);

//Servicios
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);

//Noticias
Route::get('/Noticias' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_noticias_listado',
  'as'   => 'get_pagina_noticias_listado']
);
     //Noticia Individual
      Route::get('/Publicacion/{name}/{id}' , [                    
        'uses' => 'Publicas\Paginas_Controller@get_pagina_noticia_individual',
        'as'   => 'get_pagina_noticia_individual']
      );


 //Proyectos
Route::get('/Proyecto/{name}/{id}' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_proyecto_individual',
  'as'   => 'get_pagina_proyecto_individual']
);


//Noticias Individuales
Route::get('/Proyectos' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_proyecto_listado',
  'as'   => 'get_pagina_proyecto_listado']
);


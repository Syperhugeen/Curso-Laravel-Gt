<?php
        ////////////////////////////////////////////////////////////////////////
          //Rutas de Usuarios/////////////////////////////////////////////////////
          Route::get('usuarios' , [
                    
                    'uses' => 'Admin\AdminController@index',
                    'as'   => 'admin_users_index']
          );

          //
          Route::get('usuarios/crear' , [
                    
                    'uses' => 'Admin\AdminController@create',
                    'as'   => 'admin_users_create']
          );

          Route::post('usuarios/crear' , [
                    
                    'uses' => 'Admin\AdminController@store',
                    'as'   => 'admin_users_store']
          );

          Route::patch('usuarios/editar/{id}' , [
                    
                    'uses' => 'Admin\AdminController@update',
                    'as'   => 'admin_users_update']
          );

          Route::delete('usuarios/editar/{id}' , [
                    
                    'uses' => 'Admin\AdminController@destroy',
                    'as'   => 'admin_users_destroy']
          );

          //
          Route::get('usuarios/editar/{id}' , [
                    
                    'uses' => 'Admin\AdminController@edit',
                    'as'   => 'admin_users_edit']
          );

          ////////////////////////////////////////////////////////////////////////
          //Rutas de Super Categorias////////////////////////////////////////////
          Route::get('supercategorias' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@index',
                    'as'   => 'admin_SuperCategoriasController_index']
          );

          Route::get('supercategorias/crear' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@create',
                    'as'   => 'admin_SuperCategoria_create']
          );

          Route::post('supercategorias/crear' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@store',
                    'as'   => 'admin_SuperCategoria_store']
          );

          Route::patch('supercategorias/editar/{id}' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@update',
                    'as'   => 'admin_SuperCategoria_update']
          );

          Route::delete('supercategorias/editar/{id}' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@destroy',
                    'as'   => 'admin_SuperCategoria_destroy']
          );

          //
          Route::get('supercategorias/editar/{id}' , [
                    
                    'uses' => 'Admin\SuperCategoriasController@edit',
                    'as'   => 'admin_SuperCategoria_edit']
          ); 
          
          ////////////////////////////////////////////////////////////////////////
          //Rutas de Sub Categorias//////////////////////////////////////////////
          Route::get('subcategoria' , [
                    
                    'uses' => 'Admin\SubCategoriaController@index',
                    'as'   => 'admin_SubCategoria_index']
          );

          Route::get('subcategoria/crear' , [
                    
                    'uses' => 'Admin\SubCategoriaController@create',
                    'as'   => 'admin_SubCategoria_create']
          );

          Route::post('subcategoria/crear' , [
                    
                    'uses' => 'Admin\SubCategoriaController@store',
                    'as'   => 'admin_SubCategoria_store']
          );

          Route::patch('subcategoria/editar/{id}' , [
                    
                    'uses' => 'Admin\SubCategoriaController@update',
                    'as'   => 'admin_SubCategoria_update']
          );

          
          Route::get('subcategoria/editar/{id}' , [
                    
                    'uses' => 'Admin\SubCategoriaController@edit',
                    'as'   => 'admin_SubCategoria_edit']
          );

          Route::delete('subcategoria/editar/{id}' , [
                    
                    'uses' => 'Admin\SubCategoriaController@destroy',
                    'as'   => 'admin_SubCategoria_destroy']
         );   

          //Rutas de SubCategoria Ajax
                Route::get('subcategoria/Categoria/{SuperCategoria_id}', [
                    'uses' => 'Admin\SelectsController@ObtenerCategoria',
                    'as'   => 'GetCategoria_ajax']


                );

          ////////////////////////////////////////////////////////////////////////
          //Rutas de Categoria///////////////////////////////////////////////////
          Route::get('categorias' , [
                    
                    'uses' => 'Admin\CategoriaController@index',
                    'as'   => 'admin_Categoria_index']
          );

          Route::get('categorias/crear' , [
                    
                    'uses' => 'Admin\CategoriaController@create',
                    'as'   => 'admin_Categoria_create']
          );

          Route::post('categorias/crear' , [
                    
                    'uses' => 'Admin\CategoriaController@store',
                    'as'   => 'admin_Categoria_store']
          );

          Route::patch('categoria/editar/{id}' , [
                    
                    'uses' => 'Admin\CategoriaController@update',
                    'as'   => 'admin_Categoria_update']
          );

          //
          Route::get('categoria/editar/{id}' , [
                    
                    'uses' => 'Admin\CategoriaController@edit',
                    'as'   => 'admin_Categoria_edit']
          );

          Route::delete('categoria/editar/{id}' , [
                    
                    'uses' => 'Admin\CategoriaController@destroy',
                    'as'   => 'admin_Categoria_destroy']
          ); 

          ////////////////////////////////////////////////////////////////////////
          //Rutas de Marca///////////////////////////////////////////////////////
          Route::get('marcas' , [
                    
                    'uses' => 'Admin\MarcaController@index',
                    'as'   => 'admin_Marca_index']
          );

          Route::get('marca/crear' , [
                    
                    'uses' => 'Admin\MarcaController@create',
                    'as'   => 'admin_Marca_create']
          );

          Route::post('Marca/crear' , [
                    
                    'uses' => 'Admin\MarcaController@store',
                    'as'   => 'admin_Marca_store']
          );

          Route::patch('Marca/editar/{id}' , [
                    
                    'uses' => 'Admin\MarcaController@update',
                    'as'   => 'admin_Marca_update']
          );

          //
          Route::get('Marca/editar/{id}' , [
                    
                    'uses' => 'Admin\MarcaController@edit',
                    'as'   => 'admin_Marca_edit']
          );

          Route::delete('Marca/editar/{id}' , [
                    
                    'uses' => 'Admin\MarcaController@destroy',
                    'as'   => 'admin_Marca_destroy']
          );

          ////////////////////////////////////////////////////////////////////////
          //Rutas de Producto////////////////////////////////////////////////////
          Route::get('Productos' , [
                    
                    'uses' => 'Admin\ProductoController@index',
                    'as'   => 'admin_Producto_index']
          );

          Route::get('Producto/crear' , [
                    
                    'uses' => 'Admin\ProductoController@create',
                    'as'   => 'admin_Producto_create']
          );

          Route::post('Producto/crear' , [
                    
                    'uses' => 'Admin\ProductoController@store',
                    'as'   => 'admin_Producto_store']
          );

          Route::patch('Producto/editar/{id}' , [
                    
                    'uses' => 'Admin\ProductoController@update',
                    'as'   => 'admin_Producto_update']
          );

          //
          Route::get('Producto/editar/{id}' , [
                    
                    'uses' => 'Admin\ProductoController@edit',
                    'as'   => 'admin_Producto_edit']
          );

          Route::delete('Producto/editar/{id}' , [
                    
                    'uses' => 'Admin\ProductoController@destroy',
                    'as'   => 'admin_Producto_destroy']
          );

          //Rutas de Producto Ajax
                Route::get('Producto/Categoria/{SuperCategoria_id}', [
                    'uses' => 'Admin\SelectsController@ObtenerCategoria',
                    'as'   => 'GetCategoria_ajax']


                );

                Route::get('Producto/SubCategoria/{Categoria_id}', [
                    'uses' => 'Admin\SelectsController@ObtenerSubCategoria',
                    'as'   => 'GetSubCategoria_ajax']


                );

        //Worldmaster Datos
        ////////////////////////
          Route::get('Worldmaster' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@index',
                    'as'   => 'WorldmasterDatos_index']
          );

          Route::get('Worldmaster/crear' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@create',
                    'as'   => 'WorldmasterDatos_create']
          );

          Route::post('Worldmaster/store' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@store',
                    'as'   => 'WorldmasterDatos_store']
          );

          Route::patch('Worldmaster/update' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@update',
                    'as'   => 'WorldmasterDatos_update']
          );

          //
          Route::get('Worldmaster/edit' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@edit',
                    'as'   => 'WorldmasterDatos_edit']
          ); 
          Route::post('SubirCotizacionAdminHeader' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@SubirCotizacionAdminHeader',
                    'as'   => 'SubirCotizacionAdminHeader']
          );

          Route::post('SubirDatosOfertaAdminHeader' , [
                    
                    'uses' => 'Admin\WorldmasterDatosController@SubirDatosOfertaAdminHeader',
                    'as'   => 'SubirDatosOfertaAdminHeader']
          );

          //Empresas DE Tranposrtes     
          Route::get('Empresas-De-Transporte' , [
                    
                    'uses' => 'Admin\EmpresasDeTransporteController@index',
                    'as'   => 'Empresas-De-Transporte_index']
          );
          Route::get('Empresas-De-Transporte/create' , [
                    
                    'uses' => 'Admin\EmpresasDeTransporteController@create',
                    'as'   => 'Empresas-De-Transporte_create']
          );
          Route::post('Empresas-De-Transporte/store' , [
                    
                    'uses' => 'Admin\EmpresasDeTransporteController@store',
                    'as'   => 'Empresas-De-Transporte_store']
          );
          
          Route::get('Empresas-De-Transporte/edit/{id}' , [
                    
                    'uses' => 'Admin\EmpresasDeTransporteController@edit',
                    'as'   => 'Empresas-De-Transporte_edit']
          );
          Route::patch('Empresas-De-Transporte/update{id}' , [
                    
                    'uses' => 'Admin\EmpresasDeTransporteController@update',
                    'as'   => 'Empresas-De-Transporte_update']
          );

          //Barrios     
          Route::get('Barrios' , [
                    
                    'uses' => 'Admin\BarrioController@index',
                    'as'   => 'Barrio_index']
          );
          Route::get('Barrios/create' , [
                    
                    'uses' => 'Admin\BarrioController@create',
                    'as'   => 'Barrio_create']
          );
          Route::post('Barrios/store' , [
                    
                    'uses' => 'Admin\BarrioController@store',
                    'as'   => 'Barrio_store']
          );
          
          Route::get('Barrios/edit/{id}' , [
                    
                    'uses' => 'Admin\BarrioController@edit',
                    'as'   => 'Barrio_edit']
          );
          Route::patch('Barrios/update{id}' , [
                    
                    'uses' => 'Admin\BarrioController@update',
                    'as'   => 'Barrio_update']
          );

          //Metodos de Pagos
          //Barrios     
          Route::get('MetodoPago' , [
                    
                    'uses' => 'Admin\MetodoPagosController@index',
                    'as'   => 'MetodoPago_index']
          );
          Route::get('MetodoPago/create' , [
                    
                    'uses' => 'Admin\MetodoPagosController@create',
                    'as'   => 'MetodoPago_create']
          );
          Route::post('MetodoPago/store' , [
                    
                    'uses' => 'Admin\MetodoPagosController@store',
                    'as'   => 'MetodoPago_store']
          );
          
          Route::get('MetodoPago/edit/{id}' , [
                    
                    'uses' => 'Admin\MetodoPagosController@edit',
                    'as'   => 'MetodoPago_edit']
          );
          Route::patch('MetodoPago/update{id}' , [
                    
                    'uses' => 'Admin\MetodoPagosController@update',
                    'as'   => 'MetodoPago_update']
          );

          //pagina de preguntas
          Route::get('Ordenes' , [
                    
                    'uses' => 'Admin\OrdenesController@index',
                    'as'   => 'Ordenes_index']
          );

          //pagina de preguntas
          Route::get('Preguntas_Index' , [
                    
                    'uses' => 'Preguntas_Repuestas\PreguntaController@Preguntas_Index',
                    'as'   => 'Preguntas_Index']
          );

          // Home De Admin
          Route::get('Home_Index' , [
                    
                    'uses' => 'Admin\HomeController@Home_Index',
                    'as'   => 'Home_Index']
          );

          //Acciones cuando quiero dejar como cobrada o no cobrada
          Route::patch('Ordenes-Orden_Cobrada/{id}' , [
                    
                    'uses' => 'Admin\OrdenesController@Orden_Cobrada',
                    'as'   => 'Orden_Cobrada']
          );

          //Acciones cuando quiero indicar que esta finalizada
          Route::patch('Ordenes-Orden_Finalizada/{id}' , [
                    
                    'uses' => 'Admin\OrdenesController@Orden_Finalizada',
                    'as'   => 'Orden_Finalizada']
          );

          //Ruta de Delet Pregunta
           Route::patch('Orden_Cancelar/{id}' , [
           'uses' => 'Admin\OrdenesController@Orden_Cancela',
           'as'   => 'Orden_Cancelar'
           ]);


           //Ruta de Responder
           Route::post('respuesta_post' , [
           'uses' => 'Preguntas_Repuestas\PreguntaController@respuesta_post',
           'as'   => 'respuesta_post'
           ]);

           //Ruta de Delet Pregunta
           Route::get('pregunta_delete/{id_pregunta}' , [
           'uses' => 'Preguntas_Repuestas\PreguntaController@pregunta_delete',
           'as'   => 'pregunta_delete'
           ]);

           //Subir Stock
           Route::post('subirStock' , [
           'uses' => 'Admin\SubirStock\SubirStockController@LeerExcel',
           'as'   => 'Subir_Stock'
           ]);

           //Mantenimiento de Producstos
           Route::get('Mantenimiento' , [
           'uses' => 'Admin\TareasMantenimiento\ProductosMantenimientoController@AjustarEspaciosLocalIdYProductosSlug',
           'as'   => 'Producto_Mantenimiento_AjustarEspaciosLocalIdYProductosSlug'
           ]);

           //Mantenimiento de Producstos
           Route::get('Republicar_Mercadolibre' , [
           'uses' => 'Admin\TareasMantenimiento\ProductosMantenimientoController@Republicar_Mercadolibre',
           'as'   => 'Republicar_Mercadolibre'
           ]);
           Route::get('UserArreglarNovedades' , [
           'uses' => 'Admin\TareasMantenimiento\ProductosMantenimientoController@UserArreglarNovedades',
           'as'   => 'UserArreglarNovedades'
           ]);


           //Productos Agrupados
           Route::post('Producto-Agrupado-Subir' , [
           'uses' => 'Admin\ProductosAgrupado\ProductoAgrupadoController@SubirProductoAgrupado',
           'as'   => 'SubirProductoAgrupado'
           ]);

           Route::get('Producto/Agrupado/Eliminar/{id}/{id_producto_padre}' , [
           'uses' => 'Admin\ProductosAgrupado\ProductoAgrupadoController@EliminarProductoAgrupado',
           'as'   => 'EliminarProductoAgrupado'
           ]);



           //subir usuarios a Newslleter y editar newsleeter
           //Productos Agrupados
           Route::post('CrearNuevoUsuarioNovedad' , [
           'uses' => 'Newslleter\NewslleterController@CrearNuevoUsuarioNovedad',
           'as'   => 'CrearNuevoUsuarioNovedad'
           ]);

           Route::get('getUsuariosNovedades' , [
           'uses' => 'Newslleter\NewslleterController@getUsuariosNovedades',
           'as'   => 'getUsuariosNovedades'
           ]);

          Route::get('getCrearNuevoUsuarioNovedad' , [
           'uses' => 'Newslleter\NewslleterController@getCrearNuevoUsuarioNovedad',
           'as'   => 'getCrearNuevoUsuarioNovedad'
           ]);

         Route::get('HomeNewslleter' , [
           'uses' => 'Newslleter\NewslleterController@HomeNewslleter',
           'as'   => 'HomeNewslleter'
           ]);
         Route::post('SubirProductoNeslleter' , [
           'uses' => 'Newslleter\NewslleterController@SubirProductoNeslleter',
           'as'   => 'SubirProductoNeslleter'
           ]);

          Route::post('SubirProductoDeSuperCategoriaANewslleter' , [
          'uses' => 'Newslleter\NewslleterController@SubirProductoDeSuperCategoriaANewslleter',
          'as'   => 'SubirProductoDeSuperCategoriaANewslleter'
         ]); 

          Route::post('SubirProductoUltimos' , [
          'uses' => 'Newslleter\NewslleterController@SubirProductoUltimos',
          'as'   => 'SubirProductoUltimos'
         ]);

         Route::get('EliminarProductoNewslleter{id}' , [
           'uses' => 'Newslleter\NewslleterController@EliminarProductoNewslleter',
           'as'   => 'EliminarProductoNewslleter'
           ]);
        Route::get('EliminarTodoProductoNewslleter' , [
           'uses' => 'Newslleter\NewslleterController@EliminarTodoProductoNewslleter',
           'as'   => 'EliminarTodoProductoNewslleter'
           ]);

        

        Route::post('CreoLosUsuariosAEnviar' , [
           'uses' => 'Newslleter\NewslleterController@CreoLosUsuariosAEnviar',
           'as'   => 'CreoLosUsuariosAEnviar'
           ]);

        Route::get('EleminarNewslleterTableUsers' , [
           'uses' => 'Newslleter\NewslleterController@EleminarNewslleterTableUsers',
           'as'   => 'EleminarNewslleterTableUsers'
           ]);

        
        Route::get('vistaNews' , [
           'uses' => 'Newslleter\NewslleterController@vistaNews',
           'as'   => 'vistaNews'
           ]);

        Route::patch('PreparadoDelNewslleterDatos' , [
           'uses' => 'Newslleter\NewslleterController@PreparadoDelNewslleterDatos',
           'as'   => 'PreparadoDelNewslleterDatos'
           ]);
         

          //
          Route::get('getReviewsProductos' , [
                    
                    'uses' => 'Admin\ReviewsControllers@getReviewsProductos',
                    'as'   => 'getReviewsProductos']
          );


            //Facebooks pruebas
           Route::get('facebook' , [
           'uses' => 'Facebook\FacebookController@index',
           'as'   => 'facebook'
           ]);
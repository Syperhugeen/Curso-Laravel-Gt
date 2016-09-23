<?php   


        Route::get('Carrito' , [
         'middleware' => 'auth',
         'uses'       => 'CarritoController@show',
         'as'         => 'Carrito_show'
         ]);
        /**
         * Proceso de Compra 
         */
        Route::post('ProcesoCompra-GraboUserMontevideoInterior' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboUserMontevideoInterior',
          'as'    => 'ProcesoCompra_GraboUserMontevideoInterior'
        ]);

        Route::get('ProcesoCompra-EtapaUnoCompleta' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@ConfirmoProductosPasoAEnvios',
          'as'    => 'ProcesoCompra_EtapaUnoCompleta'
        ]);

        Route::patch('ProcesoCompra-GraboMetodoDeEnvio' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboMetodoDeEnvio',
          'as'    => 'ProcesoCompra_GraboMetodoDeEnvio'
        ]);

        Route::patch('ProcesoCompra-GraboDepartamentoUser' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboDepartamentoUser',
          'as'    => 'ProcesoCompra_GraboDepartamentoUser'
        ]);

        Route::get('ProcesoCompra-EditarDatosUser' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@EditarDatosUser',
          'as'    => 'ProcesoCompra_EditarDatosUser'
        ]);

        Route::get('ProcesoCompra-GraboEnOrdenCiudad_Departamento' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboEnOrdenCiudad_Departamento',
          'as'    => 'ProcesoCompra_GraboEnOrdenCiudad_Departamento'
        ]);
        Route::patch('ProcesoCompra-GraboEmpresaTransporte_Opcion' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboEmpresaTransporte_Opcion',
          'as'    => 'ProcesoCompra_GraboEmpresaTransporte_Opcion'
        ]);
        Route::patch('ProcesoCompra-CreoDireccionUser' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@CreoDireccionUser',
          'as'    => 'ProcesoCompra_CreoDireccionUser'
        ]);
        Route::patch('ProcesoCompra-ConfirmoDireccionUser' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@ConfirmoDireccionUser',
          'as'    => 'ProcesoCompra_ConfirmoDireccionUser'
        ]);

        Route::patch('ProcesoCompra-GrabaBarrioUser' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GrabaBarrioUser',
          'as'    => 'ProcesoCompra_GrabaBarrioUser'
        ]);

        Route::get('ProcesoCompra-GrabaBarrioUserAlConfirmarDatos' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GrabaBarrioUserAlConfirmarDatos',
          'as'    => 'ProcesoCompra_GrabaBarrioUserAlConfirmarDatos'
        ]);

        Route::patch('ProcesoCompra-GraboEmpresaTransporteMontevideo' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboEmpresaTransporteMontevideo',
          'as'    => 'ProcesoCompra_GraboEmpresaTransporteMontevideo'
        ]);

        Route::post('ProcesoCompra-GraboMetodoDePago' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboMetodoDePago',  
          'as'    => 'ProcesoCompra_GraboMetodoDePago'
        ]);

        Route::post('ProcesoCompra-GraboTotalYMonedaDePago' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboTotalYMonedaDePago',
          'as'    => 'ProcesoCompra_GraboTotalYMonedaDePago'
        ]);

        Route::post('ProcesoCompra-GraboCantidadDeCuotas' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@GraboCantidadDeCuotas',
          'as'    => 'ProcesoCompra_GraboCantidadDeCuotas'
        ]);

        
        
        Route::post('ProcesoCompra-FinalizarOrdenDeCompra' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@FinalizarOrdenDeCompra',
          'as'    => 'ProcesoCompra_FinalizarOrdenDeCompra'
        ]);
        Route::post('ProcesoCompra_FinalizarOrdenDeCompra_OcaOnline' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@FinalizarOrdenDeCompra_OcaOnline',
          'as'    => 'ProcesoCompra_FinalizarOrdenDeCompra_OcaOnline'
        ]);

        Route::get('ProcesoCompra-BorrarOrden' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@BorrarOrden',
          'as'    => 'ProcesoCompra_BorrarOrden'
        ]);


        Route::get('Orden-De-Compra/{id}' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@PaginaDeOrdenDeCompraAlTerminar',
          'as'    => 'ProcesoCompra_PaginaDeOrdenDeCompraAlTerminar'
        ]);


        //Proceso de Compra Ajax
        Route::get('ProcesoCompra-ActualizarMetodoEnvio' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@ActualizarMetodoEnvio',
          'as'    => 'ProcesoCompra_ActualizarMetodoEnvio'
        ]);


        Route::get('IrPasoATrasBorrarSesionOrden' , [
          'uses'  => 'ProcesoCompra\ProcesoCompra@IrPasoATrasBorrarSesionOrden',
          'as'    => 'IrPasoATrasBorrarSesionOrden'
        ]);

       


     /**
      * Rutas para los Reviews de los usuarios
      */ 

      Route::get('calificar/{user_id}' , [
       'uses' => 'Calificaciones\CalificacionesController@index',
       'as'   => 'calificar_index'
       ]);

      Route::patch('Review{Review_id}/calificar' , [
       'uses' => 'Calificaciones\CalificacionesController@calificar_reviewWorldmaster',
       'as'   => 'calificar_reviewWorldmaster'
       ]);

      Route::patch('ReviewProducto{Review_id}' , [
       'uses' => 'Calificaciones\CalificacionesController@calificar_reviewProducto',
       'as'   => 'calificar_reviewProducto'
       ]);

      

      Route::post('calificar/compra' , [
      'uses' => 'Calificaciones\CalificacionesController@post',
      'as'   => 'calificar_post'
      ]);   


      //Ruta de Creacion de Pregunta
      Route::post('pregunta_post' , [
      'uses' => 'Preguntas_Repuestas\PreguntaController@pregunta_post',
      'as'   => 'pregunta_post'
      ]);


      //Grabo Usuario Barrio
      Route::patch('GraboBarrioDeUser' , [
      'uses' => 'EntidadesShow\ProductoController@GraboBarrioDeUser',
      'as'   => 'GraboBarrioDeUser'
      ]);


      //Perfil de Usuario Conectado
      Route::get('Usuario-{name}-{id}' , [
      'uses' => 'EntidadesShow\PaginasDeUserController@UserPerfil',
      'as'   => 'UserPerfil'
      ]);

      //Ordenes Listado de Usuario Conectado
      Route::get('Ordenes-de-{name}-{id}' , [
      'uses' => 'EntidadesShow\PaginasDeUserController@PaginaOrdenesDeUser',
      'as'   => 'PaginaOrdenesDeUser'
      ]);



      //grabo-la-edision-direccion-del-usuario
      Route::patch('EditoDireccionUser/{id}' , [
      'uses' => 'EntidadesShow\PaginasDeUserController@EditoDireccionUser',
      'as'   => 'EditoDireccionUser'
      ]);

      //creo-la-edision-direccion-del-usuario
      Route::post('CreoDireccionDeUser' , [
      'uses' => 'EntidadesShow\PaginasDeUserController@CreoDireccionDeUser',
      'as'   => 'CreoDireccionDeUser'
      ]);


      //Edito Al Usuario
      Route::patch('EditoUser/{id}' , [
      'uses' => 'EntidadesShow\PaginasDeUserController@EditoUser',
      'as'   => 'EditoUser'
      ]);
      




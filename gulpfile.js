var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['estilo.scss'])
       .version(['css/app.css']);

    mix.scripts([
        'Plug-jquery-1.11.3.min.js',        
        'Plug-bootstrap-notify.min.js',        
        'Plug-bootstrap.min.js',
        'Plug-chosen.jquery.js',
        'Plug-ImageSelect.jquery.js',
        'Plug-jquery.maxcharwarning.min.js',
        'Plug-jquery.tooltip.min.js',
        'Plug-barraprogreso.js',
        'Plug-rating-plugin.js',
        'Plug-bxSlider.js',
        'inicio.js',
        'Funciones_Personalizadas.js',
        'googleAnaliticsEventosFunciones.js',
        'GoogleAnalitics_Eventos.js',
        'MuestraBarraDeCarga.js',
        'mis-selects.js',
        'contador_de_caracteres.js',
        'header-js.js', 
        'menu.js',
        'menuGrande.js',
        'seo-admin-description.js',
        'articulos.js',        
        'app.js',
        'carrito.js',
        'ProcesoDeCompra.js',
        'ProcesoDeCompraComplementos.js',
        'Validaciones.js',
        'Errores.js',
        'FilstrosEntidades.js',
        'Ordenes.js',
        'productoPagina.js',
        'cartilitosHover.js',
        'Reviews.js',
        'misRatings.js',
        'MostrarHijosNexxt.js',
        'preguntas.js',
        'mis-scrollA.js',
        'Plug-VentanasModals.js',
        'misVentanasModals.js',
        'perfilUser.js',
        'menuAdmin.js',
        'adminGeneral.js',
        'Plug-EasyAutoComplete.js',
        'BuscadorPrincipal.js',
        'Plug-Scroll-Too.js',
        'botonItArriva.js',
        'Disparador_De_Form.js',
        'mis-sliders.js',
        'fin.js']);
});

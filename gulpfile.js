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
        'mis-funciones_personalizadas.js',
        'mis-funciones_personalizadas_para_GoogleAnalitics.js',
        'GoogleAnalitics_Eventos.js',
        'MuestraBarraDeCarga.js',
        'mis-selects.js',
        'app.js',
        'mis-validaciones.js',
        'Errores.js',        
        'mis-scrollA.js',
        'Plug-VentanasModals.js',
        'mis-ventanas_modals.js',
        'Plug-EasyAutoComplete.js',
        'Plug-Scroll-Too.js',
        'mis-disparador_De_Form.js',
        'mis-sliders.js',
        'fin.js']);
});

<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;


class Paginas_Controller extends Controller
{
    protected $ImgHomeRepo;

    public function __construct(ImgHomeRepo $ImgHomeRepo)
    {
        $this->ImgHomeRepo = $ImgHomeRepo;
    }

    //Contacto
    public function get_pagina_contacto()
    {
        return view('paginas.contacto.contacto');
    }

    //Empresa
    public function get_pagina_empresa()
    {
        return view('paginas.empresa.empresa');
    }

    

    //servicios
    public function get_pagina_servicios()
    {
        return view('paginas.servicios.servicios');
    }

    //Noticias
    public function get_pagina_noticias_noticias_listado()
    {
        return view('paginas.noticias.noticias_listado');
    }

    //Noticias Individual
    public function get_pagina_noticias_noticias_individual()
    {
        return view('paginas.noticias.noticias_individual');
    }

    //Proyectos
    public function get_pagina_proyecto_listado()
    {
        return view('paginas.proyecto.proyecto_listado');
    }

    public function get_pagina_proyecto_individual()
    {
        return view('paginas.proyecto.proyecto_individual');
    }


}
<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;


class Paginas_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $ProyectoRepo;

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                ProyectoRepo $ProyectoRepo     )
    {
        $this->ProyectoRepo = $ProyectoRepo;
        $this->ImgHomeRepo  = $ImgHomeRepo;
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
    public function get_pagina_proyecto_listado(Request $Request)
    {
        $Proyectos = $this->ProyectoRepo->getEntidadActivasPaginadas($Request,3) ;
        return view('paginas.proyecto.proyecto_listado', compact('Proyectos'));
    }

    public function get_pagina_proyecto_individual($name,$id)
    {

        $Proyecto = $this->ProyectoRepo->find($id);

        return view('paginas.proyecto.proyecto_individual',compact('Proyecto'));
    }


}
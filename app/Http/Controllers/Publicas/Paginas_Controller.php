<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\MarcaRepo;
use App\Repositorios\EventoRepo;
use App\Repositorios\Marca_de_eventoRepo;


class Paginas_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $ProyectoRepo;
    protected $NoticiasRepo;
    protected $EmpresaRepo;
    protected $MarcaRepo;
    protected $EventoRepo;
    protected $Marca_de_eventoRepo;

    public function __construct(ImgHomeRepo         $ImgHomeRepo,
                                ProyectoRepo        $ProyectoRepo, 
                                NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo, 
                                MarcaRepo           $MarcaRepo,
                                EventoRepo          $EventoRepo,
                                Marca_de_eventoRepo $Marca_de_eventoRepo   )
    {
        $this->ProyectoRepo        = $ProyectoRepo;
        $this->ImgHomeRepo         = $ImgHomeRepo;
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->MarcaRepo           = $MarcaRepo;
        $this->EventoRepo          = $EventoRepo;
        $this->Marca_de_eventoRepo = $Marca_de_eventoRepo;
    }

    //Contacto
    public function get_pagina_contacto()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.contacto.contacto', compact('Empresa'));
    }

    //pagina donde estan las marcas
    public function get_pagina_marcas(Request $Request)
    {
        $Marcas = $this->MarcaRepo->getEntidadActivasPaginadas($Request,20);
        return view('paginas.marcas.marcas', compact('Marcas'));
    }
        //pagina de la marca individual
        public function get_pagina_marca_individual($name,$id,Request $Request)
        {
            $Marca   = $this->MarcaRepo->find($id);

            //le envio los eventos de esa marca
            $Eventos = $this->Marca_de_eventoRepo->getEntidadActivasAll_Segun_Atributo_y_Ordenadas('marca_id',$id,'desc',5);

                   
           
            return view('paginas.marcas.marca_individual', compact('Marca','Eventos'));
        }


    //pagina donde estan los eventos de esa
    public function get_pagina_eventos(Request $Request)
    {
        if($Request->get('select_marcas_en_evento') != '' && ($Request->get('select_marcas_en_evento') != null))
        {
            $Eventos = [];
 
            //traigo los eventos de esta marca
            $MarcaEventos = $this->Marca_de_eventoRepo->getMarca_de_eventoDeEstaMarca($Request->get('select_marcas_en_evento'));
            
            //busco los eventos y los cargo al array
            foreach($MarcaEventos as $MarcaEvento)
            {
                array_push($Eventos,$this->EventoRepo->find($MarcaEvento->evento_id));
            }

            $Marca_seleccionada = $this->MarcaRepo->find($Request->get('select_marcas_en_evento'));
        }
        else
        {
            $Eventos            = $this->EventoRepo->getEntidadActivasPaginadas($Request,10);
            $Marca_seleccionada = '';
        }
        
        
        $Marcas  = $this->MarcaRepo->getEntidadActivas();


        return view('paginas.eventos.eventos', compact('Eventos','Marcas','Marca_seleccionada'));
    }
        //pagina de evento individual
        public function get_pagina_evento_individual($name,$id,Request $Request)
        {
            $Evento = $this->EventoRepo->find($id);
            return view('paginas.eventos.evento_individual', compact('Evento'));
        }


    //Empresa
    public function get_pagina_empresa()
    {
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.empresa.empresa', compact('Empresa'));
    }

    

    //servicios
    public function get_pagina_servicios()
    {
        return view('paginas.servicios.servicios');
    }

    //Noticias
    public function get_pagina_noticias_listado(Request $Request)
    {
        $Noticias = $this->NoticiasRepo->getEntidadActivasPaginadas($Request,2);

        return view('paginas.noticias.noticias_listado',compact('Noticias'));
    }



    //Noticias Individual
    public function get_pagina_noticia_individual($name,$id)
    {
        $Noticia = $this->NoticiasRepo->find($id);
        
        return view('paginas.noticias.noticias_individual',compact('Noticia'));
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
<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;


class Home_Controller extends Controller
{
    protected $ImgHomeRepo;

    public function __construct(ImgHomeRepo $ImgHomeRepo)
    {
        $this->ImgHomeRepo = $ImgHomeRepo;
    }

    public function get_home()
    {
        $Imagenes = $this->ImgHomeRepo->getEntidadActivas();

        return view('home.home', compact('Imagenes'));
    }


}

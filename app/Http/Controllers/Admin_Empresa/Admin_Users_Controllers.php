<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;



class Admin_Users_Controllers extends Controller
{

  protected $Empresa;

  public function __construct(EmpresaRepo $EmpresaRepo)
  {
    $this->Empresa = $EmpresaRepo;
  }

  public function get_admin_users()
  {  
    return view('admin.users.users_home');
  }

  public function get_admin_users_crear()
  {  
    return view('admin.users.users_crear');
  }

  
}
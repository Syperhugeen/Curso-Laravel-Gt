<?php 

namespace App\Repositorios;

use App\Entidades\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class UserRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new User();
  }

  //guetters/////////////////////////////////////////////////////////////////////

  public function getUsersAll()
  {
    return $this->getEntidad()->orderBy('id','desc')->paginate(100);
  }


  //setters//////////////////////////////////////////////////////////////////////

  public function setUserAdmin($request)
  {
    $user           = $this->getEntidad();
    $user->password = 'secret';
    $user->password = bcrypt($user->password);

    //propiedades para crear
    $Propiedades = ['name','email','telefono','estado','role'];

    $this->setEntidadDato($user,$request,$Propiedades);

    $user->save(); 

  }

  public function setUserAdminEdit($user,$request)
  {
    
    //propiedades para crear
    $Propiedades = ['name','email','telefono','estado','role'];

    $this->setEntidadDato($user,$request,$Propiedades);

    $user->save(); 

  }


  
}

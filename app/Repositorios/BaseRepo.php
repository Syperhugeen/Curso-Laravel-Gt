<?php 
namespace App\Repositorios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repositorios\Emails\EmailsRepo;

/**
* Contiene metodos comunes para todo los repositorios
*/
abstract class BaseRepo 
{
    /**
     * entidad que ingresamos por parametro
     */
    protected $entidad;
    protected $EmailsRepo;

    public function __construct(EmailsRepo $EmailsRepo)
    {
      $this->EmailsRepo   = $EmailsRepo; 
      $this->entidad      = $this->getEntidad();
    }


    public function find($id)
    {
      return $this->entidad->find($id);
    }

     public function destroy_entidad($id)
    {
      $entidad_a_borrar = $this->find($id);
      $entidad_a_borrar->delete();
    }

    public function getEntidadActivas()
    {
      return $this->entidad->where('estado','si')->get();
    }

    


     

    /**
     * funcion que va a hacer creada el los repo que extiendan.
     */
    abstract public function getEntidad();



    //setters

    public function setEntidadDato($Entidad,$request,$Propiedades)
    {
        foreach ($Propiedades as $Propiedad) 
        {
           $Entidad->$Propiedad = $request->input($Propiedad);
        } 
     
    }


    public function setImagen($Entidad,$request,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo)
    {
      if($request->hasFile($nombreDelCampoForm))
       {
         //obtenemos el campo file definido en el formulario
         $file = $request->file($nombreDelCampoForm);
         
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         $Entidad->$nombreDelCampoForm= $nombre;
         $Entidad->save();
         
         
         //indicamos que queremos guardar un nuevo archivo en el disco local
         Storage::disk('local')->put($nombre,  File::get($file));
       }
    }
    

}   

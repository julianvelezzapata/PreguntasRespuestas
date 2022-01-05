<?php

namespace App\Controllers;

use App\Models\PerdedorModelo;

class Perdedor extends BaseController
{
    public function index()
    {
        return view('formularioPerdedor');
    }
    public function registrar(){
          // 1: recibir informacion del usuario
          $nombre=$this->request->getPost("nombre");
          $apellido=$this->request->getPost("apellido");
          $edad=$this->request->getPost("edad");
          $cedula=$this->request->getPost("cedula");
          $email=$this->request->getPost("email");

          if ($this->validate('perdedor')) {
            echo("todo bien");
        }else {
          $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/formulario/perdedor'))->with('mensaje', $mensaje);
        }
  
    // 2: construir un arreglo asociativo con los datos guardados
          $datos=array(
              "cedula"=>$cedula,
              "nombre"=>$nombre,
              "apellido"=>$apellido,
              "edad"=>$edad,             
              "email"=>$email
          );
    // 4 :   grabar los datos en la base de datos

    try {                       // intente hacer esto  
        $modelo = new PerdedorModelo();
        $modelo-> insert($datos);     // insert() palabra reservada codeignater para insertar el arreglo que contiene la informacion
        return redirect()->to(site_url('/'))->with('mensaje', "exito agregando usuario");
        
        
    
      } catch (\Exception $error) { // capture por que no pudo hacerse (error)
        return redirect()->to(site_url('/formulario/perdedor'))->with('mensaje',$error -> getMessage());    
      }
       
    }

   
}
<?php

namespace App\Controllers;

use App\Models\GanadorModelo;

class Ganador extends BaseController
{
    public function index()
    {
        return view('formularioGanador');
    }
    public function registrar(){
          // 1: recibir informacion del usuario
          $cedula=$this->request->getPost("cedula");
          $nombre=$this->request->getPost("nombre");
          $apellido=$this->request->getPost("apellido");
          $edad=$this->request->getPost("edad");          
          $email=$this->request->getPost("email");

          if ($this->validate('ganador')) {
            echo("todo bien");
        }else {
          $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/'))->with('mensaje', $mensaje);
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
        $modelo = new GanadorModelo();
        $modelo-> insert($datos);     // insert() palabra reservada codeignater para insertar el arreglo que contiene la informacion
        return redirect()->to(site_url('/formulario/ganador'))->with('mensaje', "exito agrando informacion");
    
      } catch (\Exception $error) { // capture por que no pudo hacerse (error)
        return redirect()->to(site_url('/formulario/ganador'))->with('mensaje',$error -> getMessage());    
      }
       
    }

   
}
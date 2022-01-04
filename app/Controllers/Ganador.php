<?php

namespace App\Controllers;

class Ganador extends BaseController
{
    public function index()
    {
        return view('formularioGanador');
    }

    public function registrar(){

  // 1: recibir informacion del usuario
        $nombre=$this->request->getPost("nombre");
        $apellidos=$this->request->getPost("apellidos");
        $edad=$this->request->getPost("edad");
        $cedula=$this->request->getPost("cedula");

  // 2: construir un arreglo asociativo con los datos guardados
        $datos=array(
            "nombre"=>$nombre,
            "apellidos"=>$apellidos,
            "edad"=>$edad,
            "cedula"=>$cedula
        );

        print_r($datos);


    }
}

<?php

namespace App\Controllers;

class Perdedor extends BaseController
{
    public function index()
    {
        return view('formularioPerdedor');
    }
    public function registrar(){
        echo("soy el controlador  de perdedor y recibo datos");
    }
}
<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class APIPreguntas extends ResourceController
{
    protected $modelName = 'App\Models\PreguntaModelo';
    protected $format    = 'json';

    public function buscarPreguntas()
    {
        return $this->respond($this->model->findAll());
    }

    // ...
}
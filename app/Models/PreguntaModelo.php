<?php

namespace App\Models;

use CodeIgniter\Model;

class PreguntaModelo extends Model
{
    protected $table      = 'preguntas';
    protected $primaryKey = 'id';

    // campos permitidos
    protected $allowedFields = ['categoria','pregunta', 'respuesta' , 'incorrecta1' , 'incorrecta2', 'incorrecta3', 'imagen' ];
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class PerdedorModelo extends Model
{
    protected $table      = 'perdedores';
    protected $primaryKey = 'cedula';

    // campos permitidos
    protected $allowedFields = ['cedula','nombre', 'apellido' , 'edad' , 'email'];
}
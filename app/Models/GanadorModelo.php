<?php

namespace App\Models;

use CodeIgniter\Model;

class GanadorModelo extends Model
{
    protected $table      = 'ganadores';
    protected $primaryKey = 'cedula';

    // campos permitidos
    protected $allowedFields = ['cedula','nombre', 'apellido' , 'edad' , 'email'];
}
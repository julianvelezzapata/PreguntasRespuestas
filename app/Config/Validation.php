<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];
    public $ganador=[
        // nombre obj---- palabra reservada codignater que pide sea requerido
            'cedula'=>'required',   
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required',           
            'email'=>'required'
        ];
    // arreglo para validar los nombres del formulario de los perdedores
        public $perdedor=[
            'cedula'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required',           
            'email'=>'required'
            ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}

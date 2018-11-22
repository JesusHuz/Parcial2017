<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    protected $table = 'inspecciones';

    protected $fillable = [  
        'placa',
        'cedula',
        'marca',
        'modelo',
        'duracion',
        'estado',
        'propietario_id'
    ];
}


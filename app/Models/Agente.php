<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    protected $table = 'agentes';

    protected $fillable = [
        'Usuario',
        'Email',
        'Puesto',
        'Dependencia',
        'password',
        'imagen',
        'Sueldo'
    ];


}

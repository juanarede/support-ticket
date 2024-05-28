<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioExterno extends Model
{
    protected $table = 'usuarios_externos';

    protected $fillable = [
        'Usuario',
        'Email',
        'password',
        'Empresa',
        'imagen'
    ];

}

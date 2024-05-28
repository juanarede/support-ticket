<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleTicket extends Model
{
    protected $table = 'detalle_tickets';

    protected $fillable = [
        'IdTicket',
        'FechaCreacion',
        'UsuarioRemitente',
        'EmailRemitente',
        'UsuarioAsignado',
        'EmailUsuarioAsignado',
        'Mensajes'
    ];

 
}

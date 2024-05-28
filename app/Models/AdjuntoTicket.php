<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdjuntoTicket extends Model
{
    protected $table = 'adjuntos_tickets';

    protected $fillable = [
        'IdTicket',
        'FechaCreacion',
        'UsuarioRemitente',
        'EmailRemitente',
        'UsuarioAsignado',
        'EmailUsuarioAsignado',
        'urlAdjunto',
        'tipoarchivo'
    ];

 
}

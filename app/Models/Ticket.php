<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';

    protected $fillable = [
        'IdTicket',
        'FechaCreacion',
        'FechaCierre',
        'FechaActualizacion',
        'Asunto',
        'Comentario',
        'UsuarioRemitente',
        'EmailRemitente',
        'UsuarioAsignado',
        'EmailUsuarioAsignado',
        'Status',
        'idSLA',
        'Categoria',
        'NumeroSerie',
        'Modelo',
        'NumeroActivo',
        'Prioridad',
        'PrioridadAgente'
    ];

 
}

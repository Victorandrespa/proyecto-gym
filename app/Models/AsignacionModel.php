<?php

namespace App\Models;

use CodeIgniter\Model;

class AsignacionModel extends Model
{
    protected $table = 'asignacion';
    protected $primaryKey = 'asignacion_id';
    protected $allowedFields = [
        'asignacion_id',
        'cliente_id',
        'actividad_id',
        'fecha',
        'hora',
        'estado',
        'fecha_reservacion'
    ];

}
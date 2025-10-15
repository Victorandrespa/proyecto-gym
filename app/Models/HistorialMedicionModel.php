<?php

namespace App\Models;

use CodeIgniter\Model;

class HistorialMedicionModel extends Model
{
    protected $table = 'historial_medicion';
    protected $primaryKey = 'medicion_id';
    protected $allowedFields = [
        'medicion_id',
        'plan_id',
        'cliente_id',
        'fecha_medicion',
        'peso',
        'altura',
        'indice_masaCorporal',
        'promedio_calorias',
        'observaciones'
    ];

}
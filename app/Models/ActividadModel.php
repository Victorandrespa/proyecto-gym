<?php

namespace App\Models;

use CodeIgniter\Model;

class ActividadModel extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = 'actividad_id';
    protected $allowedFields = [
        'actividad_id', 
        'personal_id', 
        'nombre', 
        'modalidad', 
        'nivel', 
        'fecha', 
        'hora', 
        'cupo_maximo' 
    ];
    
}
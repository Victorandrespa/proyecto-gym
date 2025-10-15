<?php

namespace App\Models;

use CodeIgniter\Model;

class MembresiaModel extends Model
{
    protected $table = 'membresia';
    protected $primaryKey = 'membresia_id';
    protected $allowedFields = [
        'membresia_id', 
        'tipo_plan', 
        'precio', 
        'duracion_meses', 
        'beneficios', 
        'sede'
    ];
    
}
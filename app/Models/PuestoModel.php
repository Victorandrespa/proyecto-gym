<?php

namespace App\Models;

use CodeIgniter\Model;

class PuestoModel extends Model
{
    protected $table = 'puesto';
    protected $primaryKey = 'puesto_id';
    protected $allowedFields = [
        'puesto_id', 
        'rol', 
        'departamento', 
        'descripcion'         
    ];
    
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'personal';
    protected $primaryKey = 'personal_id';
    protected $allowedFields = [
        'personal_id', 
        'puesto_id', 
        'nombre', 
        'apellido', 
        'telefono', 
        'email', 
        'fecha_contratacion', 
        'estado', 
        'horario', 
        'sede_principal'
    ];
    
}
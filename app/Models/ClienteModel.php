<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 
        'nombre', 
        'apellido', 
        'edad', 
        'telefono', 
        'email', 
        'contacto_emergencia', 
        'telefono_emergencia', 
        'fecha_registro' 
    ];
    
}
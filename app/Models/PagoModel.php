<?php

namespace App\Models;

use CodeIgniter\Model;

class PagoModel extends Model
{
    protected $table = 'pago';
    protected $primaryKey = 'pago_id';
    protected $allowedFields = [
        'pago_id', 
        'cliente_id', 
        'membresia_id', 
        'fecha_pago', 
        'monto', 
        'metodo_pago',
        'concepto'
    ];
    
}
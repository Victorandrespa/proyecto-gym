<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanNutricionModel extends Model
{
    protected $table = 'plan_nutricional';
    protected $primaryKey = 'plan_id';
    protected $allowedFields = [
        'plan_id', 
        'cliente_id', 
        'personal_id', 
        'objetivo', 
        'duracion', 
        'descripcion'        
    ];
    
}
    <?php

    namespace App\Models;

    use CodeIgniter\Model;

    class EstadoMembresiaModel extends Model
    {
        protected $table = 'estado_membresia';
        protected $primaryKey = 'estado_membresia_id';
        protected $allowedFields = [
            'estado_membresia_id', 
            'membresia_id', 
            'cliente_id', 
            'fecha_inicio', 
            'fecha_fin', 
            'estado' 
        ];
        
    }
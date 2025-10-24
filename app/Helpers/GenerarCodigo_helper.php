<?php
function generarCodigo($tabla, $columna, $prefijo, $longitud = 4)
{
    $db = \Config\Database::connect();
    $query = $db->table($tabla)
                ->select($columna)
                ->orderBy($columna, 'DESC')
                ->limit(1)
                ->get();
    
    $ultimo = $query->getRowArray();
    $numero = $ultimo ? intval(substr($ultimo[$columna], strlen($prefijo))) + 1 : 1;

    return $prefijo . str_pad($numero, $longitud, '0', STR_PAD_LEFT);
}

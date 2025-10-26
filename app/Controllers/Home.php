<?php

namespace App\Controllers;

use App\Models\MembresiaModel;
use App\Models\ClienteModel;
use App\Models\EstadoMembresiaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home_principal');
    }

    //Navegacion

    public function admin_view(): string
    {
        return view('admin/admin_home.php');
    }

    public function cliente_view(): string
    {
        $membresias = new MembresiaModel();
        $datos['membresias'] = $membresias->select('membresia_id, tipo_plan')->findAll();

        $clientes = new ClienteModel();
        $datos['clientes'] = $clientes->select('cliente_id, nombre, apellido')->findAll();

        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->findAll();

        return view('cliente/cliente_home.php', $datos);
    }
    public function personal_view(): string
    {
        $membresias = new MembresiaModel();
        $datos['membresias'] = $membresias->select('membresia_id, tipo_plan')->findAll();

        $clientes = new ClienteModel();
        $datos['clientes'] = $clientes->select('cliente_id, nombre, apellido')->findAll();

        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->findAll();

        return view('personal/personal_home.php', $datos);
    }
}

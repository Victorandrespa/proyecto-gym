<?php

namespace App\Controllers;

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
        return view('cliente/cliente_home.php');
    }

     public function personal_view(): string
    {
        return view('personal/personal_home.php');
    }
}




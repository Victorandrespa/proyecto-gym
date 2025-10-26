<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index($tipo = null)
    {
        if (!$tipo) {
            return redirect()->to('/');
        }
        return view('login', ['tipo' => $tipo]);
    }

    public function login()
    {
        $session = session();
        $request = service('request');

        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $tipo     = $request->getPost('tipo');

        // Usuarios de ejemplo
        $users = [
            'admin' => ['password' => 'megustaelpollo', 'role' => 'admin'],
            'personal'  => ['password' => 'megustalaproteina', 'role' => 'personal'],
            'clientehermoso' => ['password' => 'megustaelgym', 'role' => 'cliente'],
        ];

        if (isset($users[$username]) && $users[$username]['password'] === $password) {

            if ($users[$username]['role'] !== $tipo) {
                $session->setFlashdata('error', 'Tipo de usuario incorrecto');
                return redirect()->to("/login/$tipo");
            }

            // Guardar sesión con token
            $session->set([
                'logged_in' => true,
                'username'  => $username,
                'role'      => $users[$username]['role'],
                'token'     => bin2hex(random_bytes(32)),
            ]);

            // Redirigir según rol
            switch ($tipo) {
                case 'admin':
                    return redirect()->to('/verAdminHome');
                case 'personal':
                    return redirect()->to('/verPersonalHome');
                case 'cliente':
                    return redirect()->to('/verClienteHome');
            }
        } else {
            $session->setFlashdata('error', 'Usuario o contraseña incorrectos');
            return redirect()->to("/login/$tipo");
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

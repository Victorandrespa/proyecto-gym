<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
{
    $session = session();

    // Validar sesión
    if (!$session->get('logged_in') || !$session->get('token')) {
        return redirect()->to('/');
    }

    // Validar rol si se pasan argumentos
    if (!empty($arguments)) {
        // CodeIgniter passes filter args as an array (e.g. ['cliente','personal']).
        // Support both forms: either an array of roles, or a single comma-separated string.
        if (is_array($arguments)) {
            $allowedRoles = $arguments;
        } else {
            $allowedRoles = explode(',', (string) $arguments);
        }

        if (!in_array($session->get('role'), $allowedRoles)) {
            return redirect()->to('/');
        }
    }

    // Renovar token por seguridad
    $session->set('token', bin2hex(random_bytes(32)));
}

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nada
    }
}

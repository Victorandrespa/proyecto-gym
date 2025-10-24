<?php

namespace App\Controllers;

use App\Models\EstadoMembresiaModel;

class EstadoMembresiaController extends BaseController
{
    public function index_admin(): string
    {
        $this->actualizarEstadosMembresias(); //update membresias
        //Crea un objeto 
        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->findAll();
        return view('admin/estado_membresia_admin.php', $datos);
    }

    public function index_cliente(): string
    {
        $this->actualizarEstadosMembresias(); //update membresias
        //Crea un objeto 
        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->findAll();
        return view('cliente/estadoMembresias.php', $datos);
    }


    public function agregarEstadoMembresia()
    {
        //crear un objeto de tipo empleado model
        $registro = new EstadoMembresiaModel();
        $datos = [
            'estado_membresia_id' => $this->request->getPost('txt_estado_membresia_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'fecha_inicio' => $this->request->getPost('txt_fecha_inicio'),
            'fecha_fin' => $this->request->getPost('txt_fecha_fin'),
            'estado' => $this->request->getPost('txt_estado'),

        ];
        $registro->insert($datos);
        return $this->index_admin();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new EstadoMembresiaModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verEstadoMembresiaAdmin'));
    }
    public function buscar($id)
    {
        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->where(['estado_membresia_id' => $id])->first();
        return view('updates/update_estado_membresia.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'estado_membresia_id' => $this->request->getPost('txt_estado_membresia_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'fecha_inicio' => $this->request->getPost('txt_fecha_inicio'),
            'fecha_fin' => $this->request->getPost('txt_fecha_fin'),
            'estado' => $this->request->getPost('txt_estado'),

        ];
        //print_r($datos);
        $registro = new EstadoMembresiaModel();
        $registro->update($datos['estado_membresia_id'], $datos);
        return $this->index_admin();
    }


    //Actualizacion de membresias

    public function actualizarEstadosMembresias()
    {
        $registro = new EstadoMembresiaModel();

        // Obtener todas las membresías registradas
        $membresias = $registro->findAll();

        $hoy = date('Y-m-d');

        foreach ($membresias as $m) {
            // Si está activo pero la fecha venció → cambiar a 'vencido'
            if ($m['estado'] == 'activo' && $m['fecha_fin'] < $hoy) {
                $registro->update($m['estado_membresia_id'], ['estado' => 'inactivo']);
            }

            // Si quieres que se reactive automáticamente si aún está dentro de la fecha:
            if ($m['estado'] == 'inactivo' && $m['fecha_fin'] >= $hoy) {
                $registro->update($m['estado_membresia_id'], ['estado' => 'activo']);
            }
        }
    }
}

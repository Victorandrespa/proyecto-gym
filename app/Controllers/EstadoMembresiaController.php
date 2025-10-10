<?php

namespace App\Controllers;

use App\Models\EstadoMembresiaModel;

class EstadoMembresiaController extends BaseController
{
    public function index_admin(): string
    {
        //Crea un objeto 
        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->findAll();
        return view('admin/estado_membresia_admin.php', $datos);
    }

    public function index_cliente(): string
    {
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
            'ckiente_id' => $this->request->getPost('txt_cliente_id'),
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

        return redirect()->to(base_url('verEstadoMembresia'));
    }
    public function buscar($id)
    {
        $registro = new EstadoMembresiaModel();
        $datos['datos'] = $registro->where(['estado_membresia_id' => $id])->first();
        return view('update_estado_membresia', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'ckiente_id' => $this->request->getPost('txt_cliente_id'),
            'fecha_inicio' => $this->request->getPost('txt_fecha_inicio'),
            'fecha_fin' => $this->request->getPost('txt_fecha_fin'),
            'estado' => $this->request->getPost('txt_estado'),

        ];
        //print_r($datos);
        $registro = new EstadoMembresiaModel();
        $registro->update($datos['estado_membresia_id'], $datos);
        return $this->index_admin();
    }
}

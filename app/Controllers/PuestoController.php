<?php

namespace App\Controllers;

use App\Models\PuestoModel;

class PuestoController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new PuestoModel();
        $datos['datos'] = $registro->findAll();
        $datos['departamentos'] = $registro->select('puesto_id, departamento')->findAll();

        $datos['puestos'] = $registro->select('rol')->findAll();

        return view('admin/puesto_admin.php', $datos);
    }

    public function agregarPuesto()
    {
        helper('generarCodigo');

        //crear un objeto de tipo empleado model
        $registro = new PuestoModel();

        $puesto_id = generarCodigo('puesto', 'puesto_id', 'PU');

        $datos = [
            'puesto_id' => $puesto_id,
            'rol' => $this->request->getPost('txt_rol'),
            'departamento' => $this->request->getPost('txt_departamento'),
            'descripcion' => $this->request->getPost('txt_descripcion'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new PuestoModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verPuestoAdmin'));
    }
    public function buscar($id)
    {
        $registro = new PuestoModel();
        $datos['datos'] = $registro->where(['puesto_id' => $id])->first();
        return view('updates/update_puesto.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'puesto_id' => $this->request->getPost('txt_puesto_id'),
            'rol' => $this->request->getPost('txt_rol'),
            'departamento' => $this->request->getPost('txt_departamento'),
            'descripcion' => $this->request->getPost('txt_descripcion'),
        ];
        //print_r($datos);
        $registro = new PuestoModel();
        $registro->update($datos['puesto_id'], $datos);
        return $this->index();
    }
}

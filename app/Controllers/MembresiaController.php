<?php

namespace App\Controllers;

use App\Models\MembresiaModel;

class MembresiaController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new MembresiaModel();
        $datos['datos'] = $registro->findAll();
        $datos['membresias'] = $registro->select('tipo_plan')->findAll();

        return view('admin/membresia_admin.php', $datos);
    }

    public function agregarMembresia()
    {
        helper('generarCodigo');

        //crear un objeto de tipo empleado model
        $registro = new MembresiaModel();

        $membresia_id = generarCodigo('membresia', 'membresia_id', 'ME');

        $datos = [
            'membresia_id' =>  $membresia_id,
            'tipo_plan' => $this->request->getPost('txt_tipo_plan'),
            'precio' => $this->request->getPost('txt_precio'),
            'duracion_meses' => $this->request->getPost('txt_duracion_meses'),
            'beneficios' => $this->request->getPost('txt_beneficios'),
            'sede' => $this->request->getPost('txt_sede'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new MembresiaModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verMembresiaAdmin'));
    }
    public function buscar($id)
    {
        $registro = new MembresiaModel();
        $datos['datos'] = $registro->where(['membresia_id' => $id])->first();
        return view('updates/update_membresia.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'tipo_plan' => $this->request->getPost('txt_tipo_plan'),
            'precio' => $this->request->getPost('txt_precio'),
            'duracion_meses' => $this->request->getPost('txt_duracion_meses'),
            'beneficios' => $this->request->getPost('txt_beneficios'),
            'sede' => $this->request->getPost('txt_sede'),

        ];
        //print_r($datos);
        $registro = new MembresiaModel();
        $registro->update($datos['membresia_id'], $datos);
        return $this->index();
    }
}

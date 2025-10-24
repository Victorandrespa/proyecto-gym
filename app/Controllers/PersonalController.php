<?php

namespace App\Controllers;

use App\Models\PersonalModel;

class PersonalController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new PersonalModel();
        $datos['datos'] = $registro->findAll();
        return view('admin/personal_admin.php', $datos);
    }

    public function agregarPersonal()
    {
        helper('generarCodigo');

        //crear un objeto de tipo empleado model
        $registro = new PersonalModel();

        $personal_id = generarCodigo('personal', 'personal_id', 'PU');

        $datos = [
            'personal_id' => $personal_id,
            'puesto_id' => $this->request->getPost('txt_puesto_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'fecha_contratacion' => $this->request->getPost('txt_fecha_contratacion'),
            'estado' => $this->request->getPost('txt_estado'),
            'horario' => $this->request->getPost('txt_horario'),
            'sede_principal' => $this->request->getPost('txt_sede'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new PersonalModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verPersonalAdmin'));
    }
    public function buscar($id)
    {
        $registro = new PersonalModel();
        $datos['datos'] = $registro->where(['personal_id' => $id])->first();
        return view('updates/update_personal.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'personal_id' => $this->request->getPost('txt_personal_id'),
            'puesto_id' => $this->request->getPost('txt_puesto_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'fecha_contratacion' => $this->request->getPost('txt_fecha_contratacion'),
            'estado' => $this->request->getPost('txt_estado'),
            'horario' => $this->request->getPost('txt_horario'),
            'sede_principal' => $this->request->getPost('txt_sede'),
        ];
        //print_r($datos);
        $registro = new PersonalModel();
        $registro->update($datos['personal_id'], $datos);
        return $this->index();
    }
}

<?php

namespace App\Controllers;
use App\Models\ActividadModel;

class ActividadController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new ActividadModel();
        $datos['datos'] = $registro->findAll();
        return view('personal/actividades_personal.php', $datos);
    }


    public function agregarActividad()
    {
        //crear un objeto de tipo empleado model
        $registro = new ActividadModel();
        $datos = [
            'actividad_id' => $this->request->getPost('txt_actividad_id'),
            'personal_id' => $this->request->getPost('txt_personal_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'modalidad' => $this->request->getPost('txt_modalidad'),
            'nivel' => $this->request->getPost('txt_nivel'),
            'cupo_maximo' => $this->request->getPost('txt_cupo'),

           
        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new ActividadModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verActividad_personal'));
    }
    public function buscar($id)
    {
        $registro= new ActividadModel();
        $datos['datos']= $registro->where(['actividad_id' => $id])->first();
        return view('update_actividad', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'personal_id' => $this->request->getPost('txt_personal_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'modalidad' => $this->request->getPost('txt_modalidad'),
            'nivel' => $this->request->getPost('txt_nivel'),
            'cupo_maximo' => $this->request->getPost('txt_cupo'),
         
        ];
        //print_r($datos);
        $registro= new ActividadModel();
        $registro->update($datos['actividad_id'],$datos);
        return $this->index();
    }

}
<?php

namespace App\Controllers;
use App\Models\PlanNutricionModel;

class PlanNutricionController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new PlanNutricionModel();
        $datos['datos'] = $registro->findAll();
        return view('personal/plan_nutricional.php', $datos);
    }

    public function agregarPlanNutricional()
    {
        //crear un objeto de tipo empleado model
        $registro = new PlanNutricionModel();
        $datos = [
            'plan_id' => $this->request->getPost('txt_plan_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'personal_id' => $this->request->getPost('txt_personal_id'),
            'objetivo' => $this->request->getPost('txt_objetivo'),
            'duracion' => $this->request->getPost('txt_duracion'),
            'descripcion' => $this->request->getPost('txt_descripcion'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new PlanNutricionModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verPlanNutricion'));
    }
    public function buscar($id)
    {
        $registro= new PlanNutricionModel();
        $datos['datos']= $registro->where(['plan_id' => $id])->first();
        return view('update_plan_nutricion', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'plan_id' => $this->request->getPost('txt_plan_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'personal_id' => $this->request->getPost('txt_personal_id'),
            'objetivo' => $this->request->getPost('txt_objetivo'),
            'duracion' => $this->request->getPost('txt_duracion'),
            'descripcion' => $this->request->getPost('txt_descripcion'),

        ];
        //print_r($datos);
        $registro= new PlanNutricionModel();
        $registro->update($datos['plan_id'],$datos);
        return $this->index();
    }

}
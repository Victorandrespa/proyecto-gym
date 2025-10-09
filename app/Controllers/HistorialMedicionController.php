<?php

namespace App\Controllers;
use App\Models\HistorialMedicionModel;

class HistorialMedicionController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new HistorialMedicionModel();
        $datos['datos'] = $registro->findAll();
        return view('personal/historial_medicion.php', $datos);
    }

    public function agregarHistorialMedicion()
    {
        //crear un objeto de tipo empleado model
        $registro = new HistorialMedicionModel();
        $datos = [
            'medicion_id' => $this->request->getPost('txt_medicion_id'),
            'plan_id' => $this->request->getPost('txt_plan_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'fecha_medicion' => $this->request->getPost('txt_fecha_medicion'),
            'peso' => $this->request->getPost('txt_peso'),
            'altura' => $this->request->getPost('txt_altura'),
            'indice_masaCorporal' => $this->request->getPost('txt_indice_masaCorporal'),
            'promedio_calorias' => $this->request->getPost('txt_promedio_calorias'),
            'observaciones' => $this->request->getPost('txt_observaciones'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new HistorialMedicionModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verHistorialMedicion'));
    }
    public function buscar($id)
    {
        $registro= new HistorialMedicionModel();
        $datos['datos']= $registro->where(['medicion_id' => $id])->first();
        return view('update_historial_medicion', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'plan_id' => $this->request->getPost('txt_plan_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'fecha_medicion' => $this->request->getPost('txt_fecha_medicion'),
            'peso' => $this->request->getPost('txt_peso'),
            'altura' => $this->request->getPost('txt_altura'),
            'indice_masaCorporal' => $this->request->getPost('txt_indice_masaCorporal'),
            'promedio_calorias' => $this->request->getPost('txt_promedio_calorias'),
            'observaciones' => $this->request->getPost('txt_observaciones'),
        ];
        //print_r($datos);
        $registro= new HistorialMedicionModel();
        $registro->update($datos['medicion_id'],$datos);
        return $this->index();
    }

}
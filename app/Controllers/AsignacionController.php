<?php

namespace App\Controllers;
use App\Models\AsignacionModel;

class AsignacionController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new AsignacionModel();
        $datos['datos'] = $registro->findAll();
        return view('cliente/asignacion_cliente.php', $datos);
    }

    public function agregarAsignacion()
    {
        //crear un objeto de tipo empleado model
        $registro = new AsignacionModel();
        $datos = [
            'asignacion_id' => $this->request->getPost('txt_asignacion_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'actividad_id' => $this->request->getPost('txt_actividad_id'),
            'fecha' => $this->request->getPost('txt_fecha'),
            'hora' => $this->request->getPost('txt_hora'),
            'estado' => $this->request->getPost('txt_estado'),
            'fecha_reservacion' => $this->request->getPost('txt_fecha_reservacion'),
           
        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new AsignacionModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verAsignacion'));
    }
    public function buscar($id)
    {
        $registro= new AsignacionModel();
        $datos['datos']= $registro->where(['asignacion_id' => $id])->first();
        return view('update_asignacion', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'actividad_id' => $this->request->getPost('txt_actividad_id'),
            'fecha' => $this->request->getPost('txt_fecha'),
            'hora' => $this->request->getPost('txt_hora'),
            'estado' => $this->request->getPost('txt_estado'),
            'fecha_reservacion' => $this->request->getPost('txt_fecha_reservacion'),
         
        ];
        //print_r($datos);
        $registro= new AsignacionModel();
        $registro->update($datos['asignacion_id'],$datos);
        return $this->index();
    }

}
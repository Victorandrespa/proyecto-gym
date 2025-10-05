<?php

namespace App\Controllers;
use App\Models\PagoModel;

class PagoController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new PagoModel();
        $datos['datos'] = $registro->findAll();
        return view('pago', $datos);
    }

    public function agregarPago()
    {
        //crear un objeto de tipo empleado model
        $registro = new PagoModel();
        $datos = [
            'pago_id' => $this->request->getPost('txt_pago_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'fecha_pago' => $this->request->getPost('txt_fecha_pago'),
            'monto' => $this->request->getPost('txt_monto'),
            'metodo_pago' => $this->request->getPost('txt_metodo_pago'),
            'concepto' => $this->request->getPost('txt_concepto'),

        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new PagoModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verPago'));
    }
    public function buscar($id)
    {
        $registro= new PagoModel();
        $datos['datos']= $registro->where(['pago_id' => $id])->first();
        return view('update_pago', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'fecha_pago' => $this->request->getPost('txt_fecha_pago'),
            'monto' => $this->request->getPost('txt_monto'),
            'metodo_pago' => $this->request->getPost('txt_metodo_pago'),
            'concepto' => $this->request->getPost('txt_concepto'),

        ];
        //print_r($datos);
        $registro= new PagoModel();
        $registro->update($datos['pago_id'],$datos);
        return $this->index();
    }

}
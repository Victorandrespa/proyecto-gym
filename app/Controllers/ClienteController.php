<?php

namespace App\Controllers;
use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new ClienteModel();
        $datos['datos'] = $registro->findAll();
        return view('admin/clientes_admin.php', $datos);
    }

    public function agregarCliente()
    {
        //crear un objeto de tipo empleado model
        $registro = new ClienteModel();
        $datos = [
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'edad' => $this->request->getPost('txt_edad'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'contacto_emergencia' => $this->request->getPost('txt_contacto_emergencia'),
            'telefono_emergencia' => $this->request->getPost('txt_telefono_emergencia'),
            'fecha_registro' => $this->request->getPost('txt_fecha_registro'),
         
        ];
        $registro->insert($datos);
        return $this->index();
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new ClienteModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: '.$id.' eliminado exitosamente.');

        return redirect()->to(base_url('verCliente'));
    }
    public function buscar($id)
    {
        $registro= new ClienteModel();
        $datos['datos']= $registro->where(['cliente_id' => $id])->first();
        return view('update_cliente', $datos);
    }
    public function editar($id)
    {
        $datos= [
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'edad' => $this->request->getPost('txt_edad'),
            'telefono' => $this->request->getPost('txt_telefono'),
            'email' => $this->request->getPost('txt_email'),
            'contacto_emergencia' => $this->request->getPost('txt_contacto_emergencia'),
            'telefono_emergencia' => $this->request->getPost('txt_telefono_emergencia'),
            'fecha_registro' => $this->request->getPost('txt_fecha_registro'),
         
        ];
        //print_r($datos);
        $registro= new ClienteModel();
        $registro->update($datos['cliente_id'],$datos);
        return $this->index();
    }

}
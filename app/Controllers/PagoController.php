<?php

namespace App\Controllers;

use App\Models\PagoModel;
use App\Models\EstadoMembresiaModel;
use App\Models\MembresiaModel;

class PagoController extends BaseController
{
    public function index(): string
    {
        //Crea un objeto 
        $registro = new PagoModel();
        $datos['datos'] = $registro->findAll();
        return view('admin/pagos_admin.php', $datos);
    }

    public function agregarPago()
    {
        //crear un objeto de tipo empleado model
        helper('generarCodigo');

        $registro = new PagoModel();

        $pago_id = generarCodigo('pago', 'pago_id', 'PA');

        $datos = [
            'pago_id' => $pago_id,
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'fecha_pago' => $this->request->getPost('txt_fecha_pago'),
            'monto' => $this->request->getPost('txt_monto'),
            'metodo_pago' => $this->request->getPost('txt_metodo_pago'),
            'concepto' => $this->request->getPost('txt_concepto'),

        ];
        $registro->insert($datos);


        // ----------------------------
        // Actualizar estado de membresía
        // ----------------------------

        // Cargar modelo de membresías y estados
        $membresiaModel = new MembresiaModel();
        $estadoModel = new EstadoMembresiaModel();

        // Obtener duración de la membresía en meses
        $membresia = $membresiaModel->find($datos['membresia_id']);
        $meses = $membresia['duracion_meses'];

        // Buscar si ya existe un estado de membresía para este cliente
        $estado = $estadoModel->where('cliente_id', $datos['cliente_id'])->first();

        if ($estado) {
            // Si tiene membresía activa y no vencida
            $fecha_actual = date('Y-m-d');
            $fecha_expiracion = $estado['fecha_fin'];

            if ($fecha_expiracion > $fecha_actual) {
                // Sumar meses a la fecha actual de expiración
                $nueva_fecha = date('Y-m-d', strtotime("+$meses months", strtotime($fecha_expiracion)));
            } else {
                // Si ya venció, empezar desde hoy
                $nueva_fecha = date('Y-m-d', strtotime("+$meses months"));
            }

            $estadoModel->update($estado['estado_membresia_id'], ['fecha_fin' => $nueva_fecha]);
        } else {
            // Si no existe, crear registro nuevo
            $fecha_inicio = date('Y-m-d');
            $fecha_fin = date('Y-m-d', strtotime("+$meses months"));

            $nuevo_estado = [
                'cliente_id' => $datos['cliente_id'],
                'membresia_id' => $datos['membresia_id'],
                'fecha_inicio' => $fecha_inicio,
                'fecha_fin' => $fecha_fin,
                'estado' => 'Activo'  // puedes cambiar por cualquier lógica que uses
            ];
            $estadoModel->insert($nuevo_estado);
        }



        return redirect()->to(base_url('verEstadoMembresiaCliente'));
    }
    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new PagoModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verPagoAdmin'));
    }
    public function buscar($id)
    {
        $registro = new PagoModel();
        $datos['datos'] = $registro->where(['pago_id' => $id])->first();
        return view('updates/update_pago.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'pago_id' => $this->request->getPost('txt_pago_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'membresia_id' => $this->request->getPost('txt_membresia_id'),
            'fecha_pago' => $this->request->getPost('txt_fecha_pago'),
            'monto' => $this->request->getPost('txt_monto'),
            'metodo_pago' => $this->request->getPost('txt_metodo_pago'),
            'concepto' => $this->request->getPost('txt_concepto'),

        ];
        //print_r($datos);
        $registro = new PagoModel();
        $registro->update($datos['pago_id'], $datos);
        return $this->index();
    }
}

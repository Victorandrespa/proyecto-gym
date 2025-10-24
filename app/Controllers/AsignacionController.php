<?php

namespace App\Controllers;

use App\Models\AsignacionModel;
use App\Models\ActividadModel;

class AsignacionController extends BaseController
{
    public function index()
    {
        $actividadModel   = new ActividadModel();
        $asignacionModel  = new AsignacionModel();
        $clienteId       = session()->get('cliente_id'); // cliente actual

        // Obtiene todas las actividades
        $actividades = $actividadModel->findAll();

        // Recorre cada actividad para actualizar el campo "asignados"
        foreach ($actividades as &$registro) {
            $actividadId = $registro['actividad_id'];

            // Verifica si el cliente ya está asignado y el estado es 'reservado'
            $asignacion = $asignacionModel
                ->where('actividad_id', $actividadId)
                ->where('cliente_id', $clienteId)
                ->where('estado', 'reservado')  // <-- cambio
                ->first();

            $registro['esta_asignado'] = $asignacion ? true : false;

            // Actualiza el campo 'asignados' contando solo los reservados
            $totalAsignados = $asignacionModel
                ->where('actividad_id', $actividadId)
                ->where('estado', 'reservado') // <-- cambio
                ->countAllResults();


            $actividadModel->update($actividadId, ['asignados' => $totalAsignados]);
        }


        // Vuelve a cargar las actividades con el valor actualizado
        $datos['datos'] = $actividadModel->findAll();
        return view('cliente/asignacion_cliente', $datos);
    }

    /*  public function agregarAsignacion()
    {
        helper('generarCodigo');

        //crear un objeto de tipo empleado model
        $registro = new AsignacionModel();

        $asignacion_id = generarCodigo('asignacion', 'asignacion_id', 'AS');

        $datos = [
            'asignacion_id' => $asignacion_id,
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'actividad_id' => $this->request->getPost('txt_actividad_id'),
            'estado' => $this->request->getPost('txt_estado'),
            'fecha_reservacion' => $this->request->getPost('txt_fecha_reservacion'),

        ];
        $registro->insert($datos);
        return $this->index();
    } */

    public function agregarAsignacion()
    {
        helper('generarCodigo');
        $asignacionModel = new AsignacionModel();

        $actividadId = $this->request->getPost('actividad_id');
        $clienteId   = $this->request->getPost('cliente_id');
        $estado      = 'reservado';
        $fecha       = date('Y-m-d H:i:s');

        if (!$actividadId || !$clienteId) {
            session()->setFlashdata('error', 'Faltan datos para asignación.');
            return redirect()->back();
        }

        // Verificar si ya existe asignación reservada
        $asignacionExistente = $asignacionModel
            ->where('cliente_id', $clienteId)
            ->where('actividad_id', $actividadId)
            ->where('estado', 'reservado')
            ->first();

        if ($asignacionExistente) {
            session()->setFlashdata('error', 'Ya existe una asignación reservada.');
            return redirect()->back();
        }

        // Insertar asignación
        $asignacionModel->insert([
            'asignacion_id'     => generarCodigo('asignacion', 'asignacion_id', 'AS'),
            'cliente_id'        => $clienteId,
            'actividad_id'      => $actividadId,
            'estado'            => $estado,
            'fecha_reservacion' => $fecha
        ]);

        session()->setFlashdata('success', 'Asignación realizada correctamente.');
        return redirect()->back();
    }

    public function buscarAsignacion()
    {
        $clienteId = $this->request->getPost('cliente_id');
        $actividadId = $this->request->getPost('actividad_id');

        if (!$clienteId || !$actividadId) {
            session()->setFlashdata('error', 'Faltan datos para buscar la asignación.');
            return redirect()->back();
        }

        $asignacionModel = new AsignacionModel();

        $asignacion = $asignacionModel
            ->where('cliente_id', $clienteId)
            ->where('actividad_id', $actividadId)
            // ->where('estado', 'asignado') // si aplicara
            ->first();

        if (!$asignacion) {
            session()->setFlashdata('error', 'No se encontró la asignación o ya estaba desasignada.');
            return redirect()->to(base_url('verAsignacionCliente'));
        }

        return redirect()->to(base_url('eliminar_asignacion/' . $asignacion['asignacion_id']));
    }



    public function eliminar($id)
    {
        //echo "Id enviado: $id";
        $registro = new AsignacionModel();
        $registro->delete($id);

        session()->setFlashdata('mensaje', 'Registro: ' . $id . ' eliminado exitosamente.');

        return redirect()->to(base_url('verAsignacionCliente'));
    }


    public function buscar($id)
    {
        $registro = new AsignacionModel();
        $datos['datos'] = $registro->where(['asignacion_id' => $id])->first();
        return view('updates/update_asignacion.php', $datos);
    }
    public function editar($id)
    {
        $datos = [
            'asignacion_id' => $this->request->getPost('txt_asignacion_id'),
            'cliente_id' => $this->request->getPost('txt_cliente_id'),
            'actividad_id' => $this->request->getPost('txt_actividad_id'),
            'estado' => $this->request->getPost('txt_estado'),
            'fecha_reservacion' => $this->request->getPost('txt_fecha_reservacion'),

        ];
        //print_r($datos);
        $registro = new AsignacionModel();
        $registro->update($datos['asignacion_id'], $datos);
        return $this->index();
    }
}

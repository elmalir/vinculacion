<?php 
namespace App\Controllers;

use App\Models\AreaEspecificaModel;
use App\Models\AreaGeneralModel;
use CodeIgniter\Controller;
use App\Models\AsistenciaModel;
use App\Models\PersonaModel;
use DateTime;

class Asistencias extends Controller{

    public function index()
    {
        if (!empty(session('usuario'))) {
            $datos['menu'] = 'asistencias';
            $datos['subMenu'] = 'lstAsistencias';
            $asistencia = new AsistenciaModel();
            //$datos['asistencias'] = $asistencia->asObject()->orderBy('id', 'ASC')->findAll();
            if (session('admin')==1) {
                $datos['asistencias'] = $asistencia->getAllAsistenciasByProyecto();
            }else{
                $datos['asistencias'] = $asistencia->getAsistenciasByUsuario(session('id'));
            }
            //print_r($datos['asistencias']);
            $datos['contenedor'] = 'asistencias/asistencias_view';
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            return redirect()->to(base_url('log'));
        }
    }
    public function nuevo($errores='', $fechaInicio='')
    {
        if (!empty(session('usuario'))) {
            helper('form');
            //helper('date');
            $dt = new DateTime('now');
            //print_r($dt);
            $fechaHoy = $dt->format('Y-m-d');
            $datos['menu'] = 'asistencias';
            $datos['subMenu'] = 'newAsistencia';
            $datos['errores'] = $errores;
            $datos['contenedor'] = 'asistencias/asistencia_new_view';
            if (empty($fechaInicio)) {
                $datos['fechaInicio'] = $dt->format('Y-m-d H:i:s');
            }else{
                $datos['fechaInicio'] = $fechaInicio;
            }
            $datos['fechaHoy'] = $fechaHoy;
            $ag = new AreaGeneralModel();
            $ae = new AreaEspecificaModel();
            $personas = new PersonaModel();
            $datos['areasgenerales'] = $ag->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['areasespecificas'] = $ae->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['personas'] = $personas->asObject()->orderBy('id', 'ASC')->findAll();
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            return redirect()->to(base_url('log'));
        }
    }
    public function guardar()
    {
        $asistencia = new AsistenciaModel();
        $id = $this->request->getVar('id');
        $dt = new DateTime('now');
        $fechaInicio = $this->request->getVar('fechaInicio');
        $fechaFin = $dt->format('Y-m-d H:i:s');
        $dataAsistencia =[];
        if (!empty($id)) {
            $dataAsistencia = [
                    'id' => $this->request->getVar('id'),
                    'problema' => $this->request->getVar('problema'),
                    'solucion' => $this->request->getVar('solucion'),
                    'observacion' => $this->request->getVar('observacion')
                    ];
        }else{
            $dataAsistencia = [
                    'areageneral_id' => $this->request->getVar('selectAreaGeneral'),
                    'areageneral' => $this->request->getVar('areageneral'),
                    'areaespecifica_id' => $this->request->getVar('selectAreaEspecifica'),
                    'areaespecifica' => $this->request->getVar('areaespecifica'),
                    'persona_id' => $this->request->getVar('selectPersona'),
                    'fecha' => $this->request->getVar('fecha'),
                    'fechaInicio' => $this->request->getVar('fechaInicio'),
                    'fechaFin' => $fechaFin,
                    'problema' => $this->request->getVar('problema'),
                    'solucion' => $this->request->getVar('solucion'),
                    'observacion' => $this->request->getVar('observacion'),
                    'proyecto_id' => session('proyecto_id'),
                    'proyecto' => session('proyecto'),
                    'usuario_id' => session('id')
                    ];
        }
        //print_r($dataAsistencia);
        $r = $asistencia->save($dataAsistencia);
        if ($r === false) {
            $errores = $asistencia->errors();
            if (!empty($id)) {
                return $this->editar($id, $errores);
            }else{
                return $this->nuevo($errores, $fechaInicio);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('asistencias');
        }
    }
    public function editar($id, $errores='')
    {
        if (!empty(session('usuario'))) {
            helper('form');
            $asistencia = new AsistenciaModel();
            $datos['menu'] = 'asistencias';
            $datos['subMenu'] = 'editAsistencia';
            $datos['id'] = $id;
            $datos['errores'] = $errores;
            $ag = new AreaGeneralModel();
            $ae = new AreaEspecificaModel();
            $personas = new PersonaModel();
            $datos['asistencia'] = $asistencia->getOneAsistenciasByProyecto($id, session('proyecto_id'), session('id'));
            $datos['areasgenerales'] = $ag->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['areasespecificas'] = $ae->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['personas'] = $personas->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['contenedor'] = 'asistencias/asistencia_edit_view';
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            return redirect()->to(base_url('log'));
        }
    }
    public function borrar()
    {
        $id = $this->request->getVar('id');
        $asistencia = new AsistenciaModel();
        $eliminado = $asistencia->where('id', $id)->delete($id);
        $response =[];
        if($eliminado == 1){
            $response['estado']=1;
            $response['titulo']='Eliminado';
            $response['mensaje']='¡Registro eliminado con éxito!';
        }else{
            $response['estado']=0;
            $response['titulo']='Conflito';
            $response['mensaje']='¡Conflicto al intentar eliminar el registro!';
        }
        echo json_encode($response);
    }
    public function ver()
    {
        $id = $this->request->getVar('id');
        $asistencia = new AsistenciaModel();
        //$asistencia = $asistencia->asObject()->find($id);
        $asistencia = $asistencia->getOneForShowAsistenciasById($id);
        $dato['asistencia'] = $asistencia; 
        $vista = view("asistencias/asistencia_show_view", $dato);
        return $vista;
    }

}
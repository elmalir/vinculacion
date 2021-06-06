<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProyectoModel;

class Proyectos extends Controller{

    
    public function index()
    {
        helper('form');
        $datos['menu'] = 'proyectos';
        $datos['subMenu'] = 'lstProyectos';
        $p = new ProyectoModel();
        $datos['proyectos'] = $p->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'proyectos/proyectos_view';
		$vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevoProyecto($errores='')
    {
        helper('form');
        $datos['menu'] = 'proyectos';
        $datos['subMenu'] = 'newProyecto';
        $datos['errores'] = $errores;
        $datos['contenedor'] = 'proyectos/proyecto_new_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardarProyecto()
    {
        $proyecto = new ProyectoModel();
        $id = $this->request->getVar('id');
        //echo $id;
        $dataProyecto =[];
        if (!empty($id)) {
            $dataProyecto = [
                    'id' => $this->request->getVar('id'),
                    'codigo' => $this->request->getVar('codigo'),
                    'nombre' => $this->request->getVar('nombre'),
                    'periodo' => $this->request->getVar('periodo'),
                    'area' => $this->request->getVar('area'),
                    'linea' => $this->request->getVar('linea'),
                    'dominio' => $this->request->getVar('dominio'),
                    'proyecto' => $this->request->getVar('proyecto'),
                    'facultad' => $this->request->getVar('facultad'),
                    'carrera' => $this->request->getVar('carrera'),
                    'coordinador' => $this->request->getVar('coordinador'),
                    'tutor' => $this->request->getVar('tutor'),
                    'cooperantes' => $this->request->getVar('cooperantes'),
                    'encargado' => $this->request->getVar('encargado'),
                    'ciudad' => $this->request->getVar('ciudad'),
                    'tiempo' => $this->request->getVar('tiempo'),
                    'numeroParticipantes' => $this->request->getVar('numeroParticipantes'),
                    'numeroVeneficiarios' => $this->request->getVar('numeroVeneficiarios'),
                    'numeroTutores' => $this->request->getVar('numeroTutores')
                    ];
        }else{
            $dataProyecto = [
                    'codigo' => $this->request->getVar('codigo'),
                    'nombre' => $this->request->getVar('nombre'),
                    'periodo' => $this->request->getVar('periodo'),
                    'area' => $this->request->getVar('area'),
                    'linea' => $this->request->getVar('linea'),
                    'dominio' => $this->request->getVar('dominio'),
                    'proyecto' => $this->request->getVar('proyecto'),
                    'facultad' => $this->request->getVar('facultad'),
                    'carrera' => $this->request->getVar('carrera'),
                    'coordinador' => $this->request->getVar('coordinador'),
                    'tutor' => $this->request->getVar('tutor'),
                    'cooperantes' => $this->request->getVar('cooperantes'),
                    'encargado' => $this->request->getVar('encargado'),
                    'ciudad' => $this->request->getVar('ciudad'),
                    'tiempo' => $this->request->getVar('tiempo'),
                    'numeroParticipantes' => $this->request->getVar('numeroParticipantes'),
                    'numeroVeneficiarios' => $this->request->getVar('numeroVeneficiarios'),
                    'numeroTutores' => $this->request->getVar('numeroTutores')
                    ];
        }
        $r = $proyecto->save($dataProyecto);
        if ($r === false) {
            $errores = $proyecto->errors();
            if (!empty($id)) {
                return $this->editarPersona($id, $errores);
            }else{
                return $this->nuevoProyecto($errores);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('proyectos')->with('msj', 'Guardado de manera existosa');
        }
    }
    public function editarPersona($id, $errores='')
    {
        $proyecto = new ProyectoModel();
        $datos['menu'] = 'proyectos';
        $datos['subMenu'] = 'editProyecto';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['proyecto'] = $proyecto->asObject()->find($id);
        //print_r($datos['proyecto']);
        $datos['contenedor'] = 'proyectos/proyecto_edit_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrarProyecto()
    {
        $id = $this->request->getVar('id');
        $proyecto = new ProyectoModel();
        $eliminado = $proyecto->where('id', $id)->delete($id);
        //$p = $proyecto->asObject()->find($id);
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
        //return json_encode($eliminado);
        //print_r($r);
    }
    public function verPersona()
    {
        $id = $this->request->getVar('id');
        $proyecto = new ProyectoModel();
        $proyecto = $proyecto->asObject()->find($id);
        //print_r($proyecto);
        $dato['proyecto'] = $proyecto; 
        $vista = view("proyectos/proyecto_show_view", $dato);
        return $vista;
    }


}
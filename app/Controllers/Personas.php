<?php 
namespace App\Controllers;

use App\Models\GremioModel;
use CodeIgniter\Controller;
use App\Models\PersonaModel;

class Personas extends Controller{

    public function index()
    {
        $datos['menu'] = 'personas';
        $datos['subMenu'] = 'lstPersonas';
        $persona = new PersonaModel();
        $datos['personas'] = $persona->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'personas/personas_view';
		$vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevo($errores='')
    {
        helper('form');
        $datos['menu'] = 'personas';
        $datos['subMenu'] = 'newPersona';
        $datos['errores'] = $errores;
        $datos['contenedor'] = 'personas/persona_new_view';
        $gremio = new GremioModel();
        $datos['gremios'] = $gremio->asObject()->orderBy('id', 'ASC')->findAll();
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardar()
    {
        $persona = new PersonaModel();
        $id = $this->request->getVar('id');
        $dataGremio =[];
        if (!empty($id)) {
            $dataGremio = [
                    'id' => $this->request->getVar('id'),
                    'identificacion' => $this->request->getVar('identificacion'),
                    'nombre' => $this->request->getVar('nombre'),
                    'correo' => $this->request->getVar('correo'),
                    'direccion' => $this->request->getVar('direccion'),
                    'telefono' => $this->request->getVar('telefono'),
                    'celular' => $this->request->getVar('celular'),
                    'observacion' => $this->request->getVar('observacion'),
                    'activo' => $this->request->getVar('selectActivo'),
                    'gremio_id' => $this->request->getVar('selectGremio')
                    ];
        }else{
            $dataGremio = [
                    'identificacion' => $this->request->getVar('identificacion'),
                    'nombre' => $this->request->getVar('nombre'),
                    'correo' => $this->request->getVar('correo'),
                    'direccion' => $this->request->getVar('direccion'),
                    'telefono' => $this->request->getVar('telefono'),
                    'celular' => $this->request->getVar('celular'),
                    'observacion' => $this->request->getVar('observacion'),
                    'activo' => $this->request->getVar('selectActivo'),
                    'gremio_id' => $this->request->getVar('selectGremio')
                    ];
        }
        $r = $persona->save($dataGremio);
        if ($r === false) {
            $errores = $persona->errors();
            if (!empty($id)) {
                return $this->editar($id, $errores);
            }else{
                return $this->nuevo($errores);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('personas');
        }
    }
    public function editar($id, $errores='')
    {
        helper('form');
        $persona = new PersonaModel();
        $datos['menu'] = 'personas';
        $datos['subMenu'] = 'editPersona';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['persona'] = $persona->asObject()->find($id);
        $gremio = new GremioModel();
        $datos['gremios'] = $gremio->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'personas/persona_edit_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrar()
    {
        if (session('admin')==1) {
            $id = $this->request->getVar('id');
            $persona = new PersonaModel();
            $eliminado = $persona->where('id', $id)->delete($id);
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
        }else{
            $response['estado']=0;
            $response['titulo']='Conflito';
            $response['mensaje']='¡No cuenta con los permisos necesarios para la transacción!';
            echo json_encode($response);
        }
    }
    public function ver()
    {
        $id = $this->request->getVar('id');
        $persona = new PersonaModel();
        //$persona = $persona->asObject()->find($id);
        $persona = $persona->asObject()->getOnePersonas($id);
        $dato['persona'] = $persona; 
        $vista = view("personas/persona_show_view", $dato);
        return $vista;
    }

}
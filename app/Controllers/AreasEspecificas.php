<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AreaEspecificaModel;
class AreasEspecificas extends Controller{
    public function index()
    {
        $datos['menu'] = 'areasespecificas';
        $datos['subMenu'] = 'lstAreasEspecificas';
        $ae = new AreaEspecificaModel();
        $datos['areasespecificas'] = $ae->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'areas/areasespecificas_view';
        //print_r($datos['areasespecificas']);
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevo($errores='')
    {
        helper('form');
        $datos['menu'] = 'areasespecificas';
        $datos['subMenu'] = 'newAreaEspecifica';
        $datos['errores'] = $errores;
        $datos['contenedor'] = 'areas/areaespecifica_new_view';
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardar()
    {
        $area = new AreaEspecificaModel();
        $id = $this->request->getVar('id');
        //echo $id;
        $dataGrupo =[];
        if (!empty($id)) {
            $dataGrupo = [
                    'id' => $this->request->getVar('id'),
                    'nombre' => $this->request->getVar('nombre'),
                    'descripcion' => $this->request->getVar('descripcion'),
                    'activo' => $this->request->getVar('selectActivo')
                    ];
        }else{
            $dataGrupo = [
                    'nombre' => $this->request->getVar('nombre'),
                    'descripcion' => $this->request->getVar('descripcion'),
                    'activo' => $this->request->getVar('selectActivo')
                    ];
        }
        //print_r($dataGrupo);
        $r = $area->save($dataGrupo);
        if ($r === false) {
            $errores = $area->errors();
            if (!empty($id)) {
                return $this->editar($id, $errores);
            }else{
                return $this->nuevo($errores);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('areasespecificas');
        }
    }
    public function editar($id, $errores='')
    {
        helper('form');
        $area = new AreaEspecificaModel();
        $datos['menu'] = 'areasespecificas';
        $datos['subMenu'] = 'editGrupo';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['area'] = $area->asObject()->find($id);
        $datos['contenedor'] = 'areas/areaespecifica_edit_view';
        //print_r($datos['proyectos']);
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrar()
    {
        $id = $this->request->getVar('id');
        $area = new AreaEspecificaModel();
        $eliminado = $area->where('id', $id)->delete($id);
        //Código debido a que la opción useSoftDeletes está desactivada
        if(is_object($eliminado)){
            if($eliminado->connID->affected_rows == 1){
                $response['estado']=1;
                $response['titulo']='Eliminado';
                $response['mensaje']='¡Registro eliminado con éxito!';
            }else{
                $response['estado']=0;
                $response['titulo']='Conflito';
                $response['mensaje']='¡Conflicto al intentar eliminar el registro!';
            }
        }
        echo json_encode($response);
    }

}
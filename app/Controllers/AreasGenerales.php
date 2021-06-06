<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AreaGeneralModel;
class AreasGenerales extends Controller{

    public function index()
    {
        $datos['menu'] = 'areasgenerales';
        $datos['subMenu'] = 'lstAreasGenerales';
        $ag = new AreaGeneralModel();
        $datos['areasgenerales'] = $ag->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'areas/areasgenerales_view';
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevo($errores='')
    {
        helper('form');
        $datos['menu'] = 'areasgenerales';
        $datos['subMenu'] = 'newAreaGeneral';
        $datos['errores'] = $errores;
        $datos['contenedor'] = 'areas/areageneral_new_view';
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardar()
    {
        $area = new AreaGeneralModel();
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
            return redirect()->route('areasgenerales');
        }
    }
    public function editar($id, $errores='')
    {
        helper('form');
        $area = new AreaGeneralModel();
        $datos['menu'] = 'areasgenerales';
        $datos['subMenu'] = 'editGrupo';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['area'] = $area->asObject()->find($id);
        $datos['contenedor'] = 'areas/areageneral_edit_view';
        //print_r($datos['proyectos']);
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrar()
    {
        $id = $this->request->getVar('id');
        $area = new AreaGeneralModel();
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
<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AreaGeneralModel;
class AreasGenerales extends Controller{

    public function index()
    {
        if (!empty(session('usuario'))) {
            $datos['menu'] = 'areasgenerales';
            $datos['subMenu'] = 'lstAreasGenerales';
            $ag = new AreaGeneralModel();
            $datos['areasgenerales'] = $ag->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['contenedor'] = 'areas/areasgenerales_view';
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            return redirect()->to(base_url('log'));
        }
    }
    public function nuevo($errores='')
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
            helper('form');
            $datos['menu'] = 'areasgenerales';
            $datos['subMenu'] = 'newAreaGeneral';
            $datos['errores'] = $errores;
            $datos['contenedor'] = 'areas/areageneral_new_view';
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('areasgenerales');
        }
    }
    public function guardar()
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
            $area = new AreaGeneralModel();
            $id = $this->request->getVar('id');
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
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('areasgenerales');
        }
    }
    public function editar($id, $errores='')
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
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
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('areasgenerales');
        }
    }
    public function borrar()
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
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
        }else{
            $response['estado']=0;
            $response['titulo']='Conflito';
            $response['mensaje']='¡No cuenta con los permisos necesarios para la transacción!';
            echo json_encode($response);
        }
    }

}
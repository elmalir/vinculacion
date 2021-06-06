<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GremioModel;
class Gremios extends Controller{

    public function index()
    {
        helper('form');
        $datos['menu'] = 'gremios';
        $datos['subMenu'] = 'lstGremios';
        $gremio = new GremioModel();
        $datos['gremios'] = $gremio->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'gremios/gremios_view';
        //print_r($datos['gremios']);
		$vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevo($errores='')
    {
        helper('form');
        $datos['menu'] = 'gremios';
        $datos['subMenu'] = 'newGremio';
        $datos['errores'] = $errores;
        $datos['contenedor'] = 'gremios/gremio_new_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardar()
    {
        $gremio = new GremioModel();
        $id = $this->request->getVar('id');
        //echo $id;
        $dataGremio =[];
        if (!empty($id)) {
            $dataGremio = [
                    'id' => $this->request->getVar('id'),
                    'identificacion' => $this->request->getVar('identificacion'),
                    'razonSocial' => $this->request->getVar('razonSocial'),
                    'nombreComercial' => $this->request->getVar('nombreComercial'),
                    'representanteLegal' => $this->request->getVar('representanteLegal'),
                    'direccion' => $this->request->getVar('direccion'),
                    'correo' => $this->request->getVar('correo'),
                    'telefono' => $this->request->getVar('telefono'),
                    'celular' => $this->request->getVar('celular'),
                    'observacion' => $this->request->getVar('observacion')
  
                    ];
        }else{
            $dataGremio = [
                    'identificacion' => $this->request->getVar('identificacion'),
                    'razonSocial' => $this->request->getVar('razonSocial'),
                    'nombreComercial' => $this->request->getVar('nombreComercial'),
                    'representanteLegal' => $this->request->getVar('representanteLegal'),
                    'direccion' => $this->request->getVar('direccion'),
                    'correo' => $this->request->getVar('correo'),
                    'telefono' => $this->request->getVar('telefono'),
                    'celular' => $this->request->getVar('celular'),
                    'observacion' => $this->request->getVar('observacion')
                    ];
        }
        $r = $gremio->save($dataGremio);
        if ($r === false) {
            $errores = $gremio->errors();
            if (!empty($id)) {
                return $this->editar($id, $errores);
            }else{
                return $this->nuevo($errores);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('gremios')->with('msj', 'Guardado de manera existosa');
        }
    }
    public function editar($id, $errores='')
    {
        helper('form');
        $gremio = new GremioModel();
        $datos['menu'] = 'gremios';
        $datos['subMenu'] = 'editProyecto';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['gremio'] = $gremio->asObject()->find($id);
        $datos['contenedor'] = 'gremios/gremio_edit_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrar()
    {
        $id = $this->request->getVar('id');
        $gremio = new GremioModel();
        $eliminado = $gremio->where('id', $id)->delete($id);
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

}
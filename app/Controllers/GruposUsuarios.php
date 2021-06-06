<?php 
namespace App\Controllers;

use App\Models\GrupoUsuarioModel;
use App\Models\ProyectoModel;
use CodeIgniter\Controller;

class GruposUsuarios extends Controller{

    public function index()
    {
        helper('form');
        $datos['menu'] = 'gruposusuarios';
        $datos['subMenu'] = 'lstGruposUsuarios';
        $gu = new GrupoUsuarioModel();
        //$datos['grupos'] = $gu->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['grupos'] = $gu->asObject()->getGruposUsuarios();
        //print_r($datos['grupos']);
        //echo '<br>';
        //print_r($p);
        $datos['contenedor'] = 'usuarios/gruposusuarios_view';
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function nuevo($errores='')
    {
        helper('form');
        $datos['menu'] = 'gruposusuarios';
        $datos['subMenu'] = 'newGrupo';
        $datos['errores'] = $errores;
        $proyectos = new ProyectoModel();
        $datos['proyectos'] = $proyectos->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'usuarios/grupousuario_new_view';
	    $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function guardar()
    {
        $grupo = new GrupoUsuarioModel();
        $id = $this->request->getVar('id');
        //echo $id;
        $dataGrupo =[];
        if (!empty($id)) {
            $dataGrupo = [
                    'id' => $this->request->getVar('id'),
                    'nombre' => $this->request->getVar('nombre'),
                    'observacion' => $this->request->getVar('observacion'),
                    'proyecto_id' => $this->request->getVar('selectProyecto')
                    ];
        }else{
            $dataGrupo = [
                    'nombre' => $this->request->getVar('nombre'),
                    'observacion' => $this->request->getVar('observacion'),
                    'proyecto_id' => $this->request->getVar('selectProyecto'),
                    ];
        }
        //print_r($dataGrupo);
        $r = $grupo->save($dataGrupo);
        if ($r === false) {
            $errores = $grupo->errors();
            if (!empty($id)) {
                return $this->editar($id, $errores);
            }else{
                return $this->nuevo($errores);
            }
        }else{
            $session = \Config\Services::session();
            $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
            return redirect()->route('gruposusuarios');
        }
    }
    public function editar($id, $errores='')
    {
        $grupo = new GrupoUsuarioModel();
        $datos['menu'] = 'gruposusuarios';
        $datos['subMenu'] = 'editGrupo';
        $datos['id'] = $id;
        $datos['errores'] = $errores;
        $datos['grupo'] = $grupo->asObject()->find($id);
        $proyectos = new ProyectoModel();
        $datos['proyectos'] = $proyectos->asObject()->orderBy('id', 'ASC')->findAll();
        $datos['contenedor'] = 'usuarios/grupousuario_edit_view';
        //print_r($datos['proyectos']);
        $vista = view('plantilla/template', $datos);
        return $vista;
    }
    public function borrar()
    {
        $id = $this->request->getVar('id');
        $grupo = new GrupoUsuarioModel();
        $eliminado = $grupo->where('id', $id)->delete($id);
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
    public function pruebas()
    {
        $id = 11;
        $grupo = new GrupoUsuarioModel();
        $eliminado = $grupo->where('id', $id)->delete($id);
        //Código debido a que la opción useSoftDeletes está desactivada
        if(is_object($eliminado)){
            //echo 'si';
            //print_r($eliminado->connID->affected_rows);
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
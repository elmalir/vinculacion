<?php 
namespace App\Controllers;

use App\Models\GrupoUsuarioModel;
use CodeIgniter\Controller;
use App\Models\UsuarioModel;
class Usuarios extends Controller{
    public function index()
    {
        if (!empty(session('usuario'))) {
            helper('form');
            $datos['menu'] = 'usuarios';
            $datos['subMenu'] = 'lstUsuarios';
            $usuarios = new UsuarioModel();
            if (session('admin')==1) {
                $datos['usuarios'] = $usuarios->asObject()->getAllUsuarios();
            }else{
                $datos['usuarios'] = $usuarios->asObject()->getUsuarios(session('grupousuario_id'));
            }
            $datos['contenedor'] = 'usuarios/usuarios_view';
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
            $datos['menu'] = 'usuarios';
            $datos['subMenu'] = 'newUsuario';
            $datos['errores'] = $errores;
            $grupos = new GrupoUsuarioModel();
            //$datos['grupos'] = $grupos->asObject()->where('proyecto_id', session('proyecto_id'))->orderBy('id', 'ASC')->findAll();
            $datos['grupos'] = $grupos->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['contenedor'] = 'usuarios/usuario_new_view';
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('usuarios');
        }
    }
    public function guardar()
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
            $usuario = new UsuarioModel();
            $id = $this->request->getVar('id');
            $dataUsuario =[];
            if (!empty($id)) {
                $pwd = $this->request->getVar('contrasenia');
                $dataUsuario = [
                        'id' => $this->request->getVar('id'),
                        'identificacion' => $this->request->getVar('identificacion'),
                        'nombre' => $this->request->getVar('nombre'),
                        'correo' => $this->request->getVar('correo'),
                        'direccion' => $this->request->getVar('direccion'),
                        'telefono' => $this->request->getVar('telefono'),
                        'celular' => $this->request->getVar('celular'),
                        'pbservacion' => $this->request->getVar('pbservacion'),
                        'grupousuario_id' => $this->request->getVar('selectGrupo')
                        ];
                if (!empty($pwd)) {
                    $updatePasswd = array('contrasenia' => sha1($pwd));
                    $dataUsuario = array_merge($dataUsuario, $updatePasswd);
                }
            }else{
                $dataUsuario = [
                        'identificacion' => $this->request->getVar('identificacion'),
                        'nombre' => $this->request->getVar('nombre'),
                        'correo' => $this->request->getVar('correo'),
                        'contrasenia' => sha1($this->request->getVar('contrasenia')),
                        'direccion' => $this->request->getVar('direccion'),
                        'telefono' => $this->request->getVar('telefono'),
                        'celular' => $this->request->getVar('celular'),
                        'pbservacion' => $this->request->getVar('pbservacion'),
                        'grupousuario_id' => $this->request->getVar('selectGrupo')
                        ];
            }
            $r = $usuario->save($dataUsuario);
            if ($r === false) {
                $errores = $usuario->errors();
                if (!empty($id)) {
                    return $this->editar($id, $errores);
                }else{
                    return $this->nuevo($errores);
                }
            }else{
                $session->setFlashdata('mensaje', 'Transacción realizada con éxito');
                return redirect()->route('usuarios');
            }
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('usuarios');
        }
    }
    public function editar($id, $errores='')
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
            helper('form');
            $usuario = new UsuarioModel();
            $datos['menu'] = 'usuarios';
            $datos['subMenu'] = 'editUsuario';
            $datos['id'] = $id;
            $datos['errores'] = $errores;
            $datos['usuario'] = $usuario->asObject()->find($id);
            $grupos = new GrupoUsuarioModel();
            $datos['grupos'] = $grupos->asObject()->orderBy('id', 'ASC')->findAll();
            $datos['contenedor'] = 'usuarios/usuario_edit_view';
            //print_r($datos['grupos']);
            $vista = view('plantilla/template', $datos);
            return $vista;
        }else{
            $session->setFlashdata('mensaje', '¡No cuenta con los permisos necesarios para la transacción!');
            return redirect()->route('usuarios');
        }
    }
    public function borrar()
    {
        $session = \Config\Services::session();
        if (session('admin')==1) {
            $id = $this->request->getVar('id');
            $usuario = new UsuarioModel();
            $eliminado = $usuario->where('id', $id)->delete($id);
            //$p = $usuario->asObject()->find($id);
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

}
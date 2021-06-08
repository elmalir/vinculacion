<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Log extends Controller{

    public function index($errores='')
    {
        if (empty(session('usuario'))) {
            //print_r($errores);
            $dato['errores']=$errores;
            //print_r($dato);
            $vista = view('login_view', $dato);
            return $vista;
        }else{
            return redirect()->to(base_url('asistencias'));
        }
    }
    public function login()
    {
        $correo = $this->request->getVar('correo');
        $contrasenia = $this->request->getVar('contrasenia');
        $usuario = new UsuarioModel();
        $wh = ['correo' => $correo, 'contrasenia' => sha1($contrasenia)];
        $user = $usuario->asObject()->getOneUsuarioLogin($correo, sha1($contrasenia));
        
        if (!empty($user)>0) {
            //$sesion = session();
            $sesion = \Config\Services::session();
            $datos = [
                'id' => $user[0]->id,
                'usuario' => $user[0]->nombre,
                'correo' => $user[0]->correo,
                'admin' => $user[0]->administrador,
                'proyecto_id' => $user[0]->proyecto_id,
                'grupousuario_id' => $user[0]->grupousuario_id,
                'proyecto' => $user[0]->proyecto
            ];
            $sesion->set($datos);
            return redirect()->to(base_url('asistencias'))->with('mensaje', 'Inicio de sesión correcta'); //envía mensaje flasdata
        }else{
            $errores['mensaje']='Usuario y/o contrasenia incorrectos';
            return $this->index($errores);
        }
        
    }
    public function logout()
    {
        $sesion = \Config\Services::session();
        $sesion->destroy();
        return redirect()->to(base_url('/'));
    }
}
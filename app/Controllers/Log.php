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
        //echo $correo;
        //echo $contrasenia;

        $usuario = new UsuarioModel();
        $wh = ['correo' => $correo, 'contrasenia' => sha1($contrasenia)];
        $user = $usuario->asObject()->where($wh)->first();
        //print_r($user);
        //echo $user->correo;
        //echo '<br>';
        //echo count($user);
        //$user = $usuario->getUserLogin($usuario, sha1($contrasenia));
        if (!empty($user)>0) {
            //$sesion = session();
            $sesion = \Config\Services::session();
            $datos = [
                'usuario' => $user->nombre,
                'correo' => $user->correo,
                //'grupousuario_id' = $user->grupousuario_id
            ];
            print_r($datos);
            $sesion->set($datos);
            return redirect()->to(base_url('asistencias'))->with('mensaje', 1);
        }else{
            $errores['mensaje']='Usuario y/o contrasenia incorrectos';
            //return redirect()->to(base_url('log'))->with('errores', $errores);
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
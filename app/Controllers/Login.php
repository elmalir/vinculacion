<?php
namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('backend/usuario/login_view');
	}
	public function login(){
		$txtUsuario = $this->request->getPost('txtUsuario');
		$txtContrasenia = $this->request->getPost('txtContrasenia');
		$segurityModel = new \App\Models\Seguridad_Model();
		$txtContrasenia = sha1($txtContrasenia);

		$user = $segurityModel->getOneProfesional($txtUsuario, $txtContrasenia);
		if (count($user) > 0) {
			$session = session();
			$dataSesion = ['usuario' => $user[0]->Nombre, 'correo' => $user[0]->Correo, 'idEmpresa' =>$user[0]->IdEmpresa ];
			$session->set($dataSesion);
			return redirect()->to(base_url('/admin'));
		}else{
			$dato['error'] = 'Usuario y/o contraseña incorrectos'.$txtContrasenia;
			return view('backend/usuario/login_view', $dato);
		}
	}
	public function login1()
	{
		$txtUsuario = $this->request->getPost('txtUsuario');
		$txtContrasenia = $this->request->getPost('txtContrasenia');
		$userModel = new \App\Models\Usuario_Model();
		//$user = $userModel->asObject()->where('Usuario', $txtUsuario)->where('Contrasenia', $txtContrasenia)->findAll();
		$user = $userModel->getUsuario($txtUsuario, $txtContrasenia);
		if (count($user) > 0) {
			$session = session();
			//echo "<br>";
			//echo count($user);
			//echo "<br>";
			//print_r($user);
			//echo "<br>";
			//echo $user[0]['Nombre'];
			$dataSesion = ['usuario' => $user[0]['Nombre'], 'correo' => $user[0]['Correo']];
			//var_dump($user);
			$session->set($dataSesion);
			//echo "<br>";
			//echo $session->has('usuario'); //existe variable de sesión
			//echo "<br>";
			//echo session('correo');
			return redirect()->to(base_url('/admin'));
		}else{
			//echo $txtUsuario;
			//echo $txtContrasenia;
			$dato['error'] = 'Usuario y/o contraseña incorrectos';
			return view('backend/usuario/login_view', $dato);
		}
	}
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url());
	}
}

?>
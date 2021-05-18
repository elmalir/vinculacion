<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public $idEmpresa = 0;
	public function __construct(){
		//if (session('usuario')) {
			////Verificar funcionamient0
			////BaseController  no maneja Constructor
			//$this->idEmpresa = session('idEmpresa');
			//$paciente = new \App\Models\Paciente_Model();
		//}else{
			//return redirect()->to(base_url().'/login');
		//}

	}
	public function index()
	{
		//$session = session(); //también funciona
		//if ($session->has('usuario')) {
		if (session('usuario')) {
			$dato['menu'] = 'principal';
			$dato['subMenu'] = 'principal';
			$dato['titulo'] = '';
			$dato['contenedor'] = 'frontend/forms';
			$vista = view('backend/plantilla/template', $dato);
			return $vista;
		}else{
			return redirect()->to(base_url().'/login');
		}
	}
	public function nuevaEmpresa($errores='')
	{
		//$dato['errores'] = session('errores');
		$dato['menu'] = 'empresa';
		$dato['subMenu'] = 'nueva';
		$dato['titulo'] = 'Nueva Empresa';
		$dato['errores'] = $errores;
		$provincias = new \App\Models\Provincia_Model();
		$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/empresa/empresa_new_view';
		$vista = view('backend/plantilla/template', $dato);
		//print_r($dato['provincias']);
		return $vista;
	}
	public function guardarEmpresa()
	{
		$empresa = new \App\Models\Empresa_Model();

		$dataEmpresa = [
			//'Id' => 4,
				'Identificacion' => $this->request->getPost('txtIdentificacion'),
				'RazonSocial' => $this->request->getPost('txtRazonSocial'),
				'NombreComercial' => $this->request->getPost('txtNombreComercial'),
				'Correo' => $this->request->getPost('txtCorreo'),
				'Telefono' => $this->request->getPost('txtTelefono'),
				'Celular' => $this->request->getPost('txtCelular'),
				'IdProvincia' => $this->request->getPost('selectProvincia'),
				'IdCiudad' => $this->request->getPost('selectCiudad'),
				'Direccion' => $this->request->getPost('txtDireccion')
				];
		//var_dump($dataEmpresa);
		$r = $empresa->save($dataEmpresa);
		if ($r === false) {
			//var_dump($empresa->errors());
			$errores = $empresa->errors();
			//return redirect()->back()->withInput();
			//return redirect()->to('/admin/nuevaEmpresa')->with('errores', $errores);
			//$dato['contenedor'] = 'backend/empresa/empresa_new_view';
			//return $vista = view('backend/plantilla/template', $dato);
			return $this->nuevaEmpresa($errores);
		}else{
			var_dump($r);
			$this->index();
		}
		//$r = $empresa->insert($dataEmpresa);
		//print_r($r);
	}
	public function listEmpresas()
	{
		$empresa = new \App\Models\Empresa_Model();
		$dato['menu'] = 'Empresa';
		$dato['subMenu'] = 'listEmpresa';
		$dato['titulo'] = 'Empresas';
		$dato['contenedor'] = 'backend/empresa/empresas_view';
		$dato['empresas'] = $empresa->asObject()->findAll();
		$vista = view('backend/plantilla/template', $dato);
		return $vista;
	}
	public function editarEmpresa($id)
	{
		$provincias = new \App\Models\Provincia_Model();
		$ciudades = new \App\Models\Ciudad_Model();
		$empresa = new \App\Models\Empresa_Model();
		$dato['menu'] = 'empresa';
		$dato['subMenu'] = 'nueva';
		$dato['titulo'] = 'Editar Empresa';
		//$dato['errores'] = $errores;
		$dato['provincias'] = $provincias->asObject()->findAll();
		$emp = $empresa->asObject()->find($id);
		$dato['ciudades'] = $ciudades->asObject()->where('IdProvincia', $emp->IdProvincia)->findAll();
		$dato['contenedor'] = 'backend/empresa/empresa_new_view';
		//$vista = view('backend/plantilla/template', $dato);
		$dato['empresa'] = $emp;
		print_r($dato['empresa']);
		echo "<br>";
		print_r($dato['ciudades']);
		//return $vista;
	}
	public function nuevoPaciente($errores='')
	{	
		//$dato['errores'] = session('errores');
		$dato['menu'] = 'paciente';
		$dato['subMenu'] = 'nuevo';
		$dato['titulo'] = 'Nuevo Paciente';
		$dato['errores'] = $errores;
		$provincias = new \App\Models\Provincia_Model();
		$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/paciente/paciente_new_view';
		$vista = view('backend/plantilla/template', $dato);
		//print_r($dato['provincias']);
		return $vista;
	}
	public function guardarPaciente()
	{
		$paciente = new \App\Models\Paciente_Model();
		$dataPaciente = [
			//'Id' => 4,
				'Identificacion' => $this->request->getPost('txtIdentificacion'),
				'Nombre' => $this->request->getPost('txtNombre'),
				'FechaNacimiento' => $this->request->getPost('txtFechaNacimiento'),
				'Sexo' => $this->request->getPost('selectSexo'),
				'Etnia' => $this->request->getPost('selectEtnia'),
				'EstadoCivil' => $this->request->getPost('selectEstadoCivil'),
				'Celular' => $this->request->getPost('txtCelular'),
				'Telefono' => $this->request->getPost('txtTelefono'),
				'Correo' => $this->request->getPost('txtCorreo'),
				'ContactoEmergencia' => $this->request->getPost('txtContactoEmergencia'),
				'Direccion' => $this->request->getPost('txtDireccion'),
				'AntecedentePatologico' => $this->request->getPost('txtAntecedentePatologico'),
				'Contrasenia' => $this->request->getPost('txtContrasenia'),
				'GrupoSanguineo' => $this->request->getPost('txtGrupoSanguineo'),
				'Ocupacion' => $this->request->getPost('txtOcupacion'),
				'IdProvincia' => $this->request->getPost('selectProvincia'),
				'IdCiudad' => $this->request->getPost('selectCiudad'),
				'IdEmpresa' => 4 //Obtener el IdEmpresa 
				];
		//var_dump($dataEmpresa);
		$r = $paciente->save($dataPaciente);
		if ($r === false) {
			//var_dump($empresa->errors());
			$errores = $paciente->errors();
			//return redirect()->back()->withInput();
			//return redirect()->to('/admin/nuevaEmpresa')->with('errores', $errores);
			//$dato['contenedor'] = 'backend/empresa/empresa_new_view';
			//return $vista = view('backend/plantilla/template', $dato);
			return $this->nuevoPaciente($errores);
		}else{
			var_dump($r);
			$this->index();
		}
		//$r = $empresa->insert($dataEmpresa);
		//print_r($r);
	}
	public function listPacientes()
	{
		$paciente = new \App\Models\Paciente_Model();
		$dato['menu'] = 'Paciente';
		$dato['subMenu'] = 'nueva';
		$dato['titulo'] = 'Pacientes';
		$dato['contenedor'] = 'backend/paciente/pacientes_view';
		$dato['pacientes'] = $paciente->asObject()->findAll();
		//print_r($dato['pacientes']);
		$vista = view('backend/plantilla/template', $dato);
		return $vista;
	}
	public function editarPaciente($id, $errores='')
	{
		//$dato['errores'] = session('errores');
		$dato['menu'] = 'paciente';
		$dato['subMenu'] = 'nuevo';
		$dato['titulo'] = 'Editar Paciente';
		$dato['errores'] = $errores;
		$paciente = new \App\Models\Paciente_Model();
		$dato['paciente'] = $paciente->asObject()->find($id);
		$provincias = new \App\Models\Provincia_Model();
		$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/paciente/paciente_edit_view';
		$vista = view('backend/plantilla/template', $dato);
		//print_r($dato['paciente']);
		return $vista;
	}
	public function actualizarPaciente()
	{
		$paciente = new \App\Models\Paciente_Model();
		$passwd = $this->request->getPost('txtContrasenia');
		$id = $this->request->getPost('txtId');
		$dataPaciente = [
			//'Id' => 4,
				'Id' => $id,
				'Identificacion' => $this->request->getPost('txtIdentificacion'),
				'Nombre' => $this->request->getPost('txtNombre'),
				'FechaNacimiento' => $this->request->getPost('txtFechaNacimiento'),
				'Sexo' => $this->request->getPost('selectSexo'),
				'Etnia' => $this->request->getPost('selectEtnia'),
				'EstadoCivil' => $this->request->getPost('selectEstadoCivil'),
				'Celular' => $this->request->getPost('txtCelular'),
				'Telefono' => $this->request->getPost('txtTelefono'),
				'Correo' => $this->request->getPost('txtCorreo'),
				'ContactoEmergencia' => $this->request->getPost('txtContactoEmergencia'),
				'Direccion' => $this->request->getPost('txtDireccion'),
				'AntecedentePatologico' => $this->request->getPost('txtAntecedentePatologico'),
				'GrupoSanguineo' => $this->request->getPost('txtGrupoSanguineo'),
				'Ocupacion' => $this->request->getPost('txtOcupacion'),
				'IdProvincia' => $this->request->getPost('selectProvincia'),
				'IdCiudad' => $this->request->getPost('selectCiudad'),
				'IdEmpresa' => 4 //Obtener el IdEmpresa 
				];
		if (!empty($passwd)) {
			$updatePasswd = array('Contrasenia' => sha1($passwd));
			$dataPaciente = array_merge($dataPaciente, $updatePasswd);
		}
		$r = $paciente->save($dataPaciente);
		if ($r === false) {
			$errores = $paciente->errors();
			return $this->editarPaciente($id, $errores);
		}else{
			return $this->listPacientes();
		}
	}
	public function eliminarPaciente()
	{
		$id = $this->request->getPost('id');
		$paciente = new \App\Models\Paciente_Model();
		$paciente->delete($id);
		echo json_encode(array('sms' => 'Registro eliminado!'));
	}
	public function nuevoProfesional($errores='')
	{	
		//$dato['errores'] = session('errores');
		$dato['menu'] = 'profesional';
		$dato['subMenu'] = 'nuevo';
		$dato['titulo'] = 'Nuevo Profesional';
		$dato['errores'] = $errores;
		$provincias = new \App\Models\Provincia_Model();
		$seguridad = new \App\Models\Seguridad_Model();
		$dato['roles'] = $seguridad->asObject()->getAllRolesByIdEmpresa(4);
		$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/profesional/profesional_new_view';
		$vista = view('backend/plantilla/template', $dato);
		//print_r($dato['roles']);
		return $vista;
	}
	public function guardarProfesional()
	{
		$profesional = new \App\Models\Profesional_Model();

		$dataProfesional = [
			//'Id' => 4,
				'Identificacion' => $this->request->getPost('txtIdentificacion'),
				'Nombre' => $this->request->getPost('txtNombre'),
				'Especialidad' => $this->request->getPost('txtEspecialidad'),
				'Correo' => $this->request->getPost('txtCorreo'),
				'Contrasenia' => $this->request->getPost('txtContrasenia'),
				'IdProvincia' => $this->request->getPost('selectProvincia'),
				'IdCiudad' => $this->request->getPost('selectCiudad'),
				'Direccion' => $this->request->getPost('txtDireccion'),
				'Telefono' => $this->request->getPost('txtTelefono'),
				'Celular' => $this->request->getPost('txtCelular'),
				'FormacionAcademica' => $this->request->getPost('txtFormacionAcademica'),
				'IdRol' => $this->request->getPost('selectRol'),
				'IdEmpresa' => 4 //Obtener el IdEmpresa 
				];
		//var_dump($dataProfesional);
		$r = $profesional->save($dataProfesional);
		if ($r === false) {
			//var_dump($empresa->errors());
			$errores = $profesional->errors();
			//return redirect()->back()->withInput();
			//return redirect()->to('/admin/nuevaEmpresa')->with('errores', $errores);
			//$dato['contenedor'] = 'backend/empresa/empresa_new_view';
			//return $vista = view('backend/plantilla/template', $dato);
			return $this->nuevoProfesional($errores);
		}else{
			return $this->listProfesionales();

		}
	}
	public function listProfesionales()
	{
		$profesional = new \App\Models\Profesional_Model();
		$dato['menu'] = 'Profesional';
		$dato['subMenu'] = 'Nuevo';
		$dato['titulo'] = 'Profesionales';
		$dato['contenedor'] = 'backend/profesional/profesionales_view';
		$dato['profesionales'] = $profesional->asObject()->findAll();
		//print_r($dato['profesionales']);
		$vista = view('backend/plantilla/template', $dato);
		return $vista;

	}
	public function getCiudadByProv($idProvincia, $idCiudad='')
	{
		$ciudad = new \App\Models\Ciudad_Model();
		$ciudades = $ciudad->asObject()->where('IdProvincia', $idProvincia)->findAll();
		$options = '';
		foreach ($ciudades as $c) {
			if (!empty($idCiudad)) {
				if ($idCiudad== $c->Id) {
					$options .= '<option selected value="'.$c->Id.'">'.$c->Nombre.'</option>';
				}
				$options .= '<option value="'.$c->Id.'">'.$c->Nombre.'</option>';
			}else{
				$options .= '<option value="'.$c->Id.'">'.$c->Nombre.'</option>';
			}
		}
		echo $options;
	}
	public function b()
	{
		$paciente = new \App\Models\Paciente_Model();
		$paciente->delete(7);
	}
	public function p()
	{
		$ciudad = new \App\Models\Ciudad_Model();
		$ciudades = $ciudad->asObject()->where('IdProvincia', 1)->findAll();
		print_r($ciudades);
		foreach ($ciudades as $c) {
			echo $c->Nombre;
		}

	}

}
?>
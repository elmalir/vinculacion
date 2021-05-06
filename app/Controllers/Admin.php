<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$session = session();
		if ($session->has('usuario')) {
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
	public function nuevoPaciente()
	{	
		$dato['menu'] = 'paciente';
		$dato['subMenu'] = 'nueva';
		$dato['titulo'] = 'Nuevo Paciente';
		$provincias = new \App\Models\Provincia_Model();
		$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/paciente/paciente_new_view';
		$vista = view('backend/plantilla/template', $dato);
		return $vista;
	}
	public function guardarPaciente()
	{
		$paciente = new \App\Models\Paciente_Model();
		$txtIdentificacion = $this->request->getPost('txtIdentificacion');
		$arrayPaciente = array(
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
			'AntecedentePatalogico' => $this->request->getPost('txtAntecedentePatalogico'),
			'Contrasenia' => $this->request->getPost('txtContrasenia'),
			'GrupoSanguineo' => $this->request->getPost('txtGrupoSanguineo'),
			'Ocupacion' => $this->request->getPost('txtOcupacion'),
			'IdEmpresa' => 4,
			'IdProvincia' => $this->request->getPost('selectProvincia'),
			'IdCiudad' => $this->request->getPost('selectCiudad')
		);
		$r = $paciente->save($arrayPaciente);
		print_r($r);
		print_r($arrayPaciente);
	}
	public function lstPacientes()
	{
		$paciente = new \App\Models\Paciente_Model();
		$dato['menu'] = 'paciente';
		$dato['subMenu'] = 'nueva';
		$dato['titulo'] = 'Pacientes';
		$dato['contenedor'] = 'backend/paciente/pacientes_view';
		$dato['pacientes'] = $paciente->asObject()->findAll();
		//print_r($dato['pacientes']);
		$vista = view('backend/plantilla/template', $dato);
		return $vista;

	}
	public function getCiudadByProv($idProvincia)
	{
		$ciudad = new \App\Models\Ciudad_Model();
		$ciudades = $ciudad->asObject()->where('IdProvincia', $idProvincia)->findAll();
		$options = '';
		foreach ($ciudades as $c) {
			$options .= '<option value="'.$c->Id.'">'.$c->Nombre.'</option>';
		}
		echo $options;
	}
	
	public function nuevaCitaGeneral()
	{
		$dato['menu'] = 'citas';
		$dato['subMenu'] = 'general';
		$dato['titulo'] = 'Nueva Cita General';
		//$dato['provincias'] = $provincias->asObject()->findAll();
		$dato['contenedor'] = 'backend/cita/citaGeneral_new_view';
		$vista = view('backend/plantilla/template', $dato);
		//print_r($dato['provincias']);
		return $vista;
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
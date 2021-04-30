<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		$dato['menu'] = 'principal';
		$dato['subMenu'] = 'principal';
		$dato['titulo'] = '';
		//$dato['contenedor'] = 'frontend/prueba';
		//$vista = view('backend/plantilla/plantilla');
		//$emp = new \App\Models\Empresa_Model();
		//$datos['emp'] = $emp->getEmpresa();
		//$dato['contenedor'] = 'frontend/forms';
		//$vista = view('backend/plantilla/template', $dato);
		////echo "string";
		//return $vista;

		$dato['contenedor'] = 'frontend/praraplantilla';
		$vista = view('backend/plantilla/template', $dato);
		return $vista;
	}
	public function prueba()
	{
		$vista = view('backend/plantilla/cabecera');
		$vista .= view('frontend/praraplantilla');
		$vista .= view('backend/plantilla/pie');
		return $vista;
	}
	public function fomrs()
	{
		$dato['contenedor'] = 'frontend/forms';
		$vista = view('backend/plantilla/template', $dato);
		return $vista;
	}
	public function nuevoPaciente()
	{	
		$datos['menu'] = 'paciente';

		$vista = view('backend/plantilla/cabecera');
		$vista .= view('backend/paciente/new_view');
		$vista .= view('backend/plantilla/pie');
		return $vista;
	}
	public function guardarPaciente()
	{
		$paciente = new \App\Models\Paciente_Model();
		$txtIdentificacion = $this->request->getPost('txtIdentificacion');
		$r = $paciente->save([
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
			'Contrasenia' => $this->request->getPost('txtContrasenia'),
			'AntecedentePatalogico' => $this->request->getPost('txtAntecedentePatalogico'),
			'IdEmpresa' => 1,
			'deleted_at ' => 1
		]);
		print_r($r);
	}


}
?>

<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		$datos['contenedor'] = 'personas/personas_view';
		$vista = view('plantilla/template', $datos);
        return $vista;
	}

	
}
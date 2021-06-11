<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		//$datos['contenedor'] = 'personas/personas_view';
		//$vista = view('login_view');
		$vista = view('plantilla/pie');
        return $vista;
	}

	
}

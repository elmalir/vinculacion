<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonaModel;

class Personas extends Controller{

    public function index()
    {
        //$p = new Persona();
        $p = new PersonaModel();
        //$datos['personas'] = $p->orderBy('id', 'ASC')->findAll();
        $datos['personas'] = $p->asObject()->findAll();
        
        //$datos['contenedor'] = 'personas/personas_view';
		//return view('plantilla/template', $datos);
        //return view($datos['contenedor']);
        //$gu = new \App\Models\GrupoUsuario_Model();
        //$datos['personas'] = $gu->asObject()->findAll();
        //print_r($datos['personas']);
        $datos['contenedor'] = 'personas/personas_view';
		$vista = view('plantilla/template', $datos);
        return $vista;
        
    }
}
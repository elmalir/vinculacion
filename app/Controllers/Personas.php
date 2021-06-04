<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonaModel;

class Personas extends Controller{

    public function index()
    {
        $datos['menu'] = 'personas';
        $datos['subMenu'] = 'lstPersonas';
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
    public function nuevaPersona()
    {
        helper('form');
        $datos['menu'] = 'personas';
        $datos['subMenu'] = 'newPersona';
        $datos['contenedor'] = 'personas/persona_new_view';
        $vista = view('plantilla/template', $datos);
        return $vista;
    }


}
<?php

namespace App\Controllers;
use App\Models\Empresa_Model;
use App\Models\Piezadental_Model;

class Home extends BaseController
{
	public function index()
	{
		//$empresa = new \App\Models\Empresa_Model($db); //funcion
		//$empresa = new Empresa_Model($db); //funciona
		//var_dump($empresa);
		//$db = db_connect('empresa');
		//$emp = model('Empresa_Model', true, $db);
		//$data['emp'] = $empresa->findAll();
		//var_dump($data);
		$vista = view('welcome_message');
		return $vista;
	}
	public function prueba()
	{
		//$data = ['Id' => '1', 'numero' => '1', 'nombre'    => 'uno'];
		//$pieza = new Piezadental_Model($db);
		//$pieza->insert($data);
		//print_r($datos);
		//print_r($data);
		$p = new \App\Models\Piezadental_Model();
		$d = ['numero' => '2', 'nombre' => 'dos'];
		$e = ['numero' => '3', 'nombre' => 'tres'];
		$s = ['Id' => 4,'numero' => '4', 'nombre' => 'cuatro'];
		//$p->insert($e);
		//$id = 2;
		//$p->update($id, $d);
		//$r = $p->save($s);
		//$r = $p->delete(5);
		$datos = $p->findAll();
		//var_dump($datos);
		//print_r($r);
		echo "<hr>";
		//$db = \Config\Database::connect();
		//$sql = $db->query("select * from piezadental");
		//$results = $sql->getResult();
		//print_r($results);
		$r = $p->getAllPiezaDental();
		print_r($r);
	}
	public function insert($value='')
	{
		// Create a new class manually
		$userModel = new \App\Models\UserModel();
		$user = $userModel->findAll();
		$data = [
				    'username' => 'darth',
				    'email'    => 'd.vader@theempire.com'
				];
		$userModel->insert($data);
		var_dump($user);
		echo "Fin";

	}
	public function b()
	{
		echo "función";
	}
}

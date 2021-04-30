<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Piezadental_Model extends Model
{
	public  function __construct(){
		parent::__construct();
	}
	protected $table = 'piezadental';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'numero', 'nombre'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;
	public function getAllPiezaDental()
	{
		//$db = \Config\Database::connect();
		$bdd = db_connect();
		$exeSql = $bdd->query("select * from piezadental");
		return $exeSql->getResult();
	}
}

?>
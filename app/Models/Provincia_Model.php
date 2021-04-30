<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Provincia_Model extends Model
{
	protected $table = 'provincias';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'Codigo', 'Nombre'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
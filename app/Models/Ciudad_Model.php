<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Ciudad_Model extends Model
{
	protected $table = 'ciudades';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'Nombre'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
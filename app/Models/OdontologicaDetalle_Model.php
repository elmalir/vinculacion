<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class OdontologicaDetalle_Model extends Model
{
	protected $table = 'citaodontologicadetalle';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'IdCitaOdontologica', 'IdPiezadental', 'Tratamiento'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
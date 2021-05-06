<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class OdontologicaMaestro_Model extends Model
{
	protected $table = 'citaodontologicamaestro';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'codigo', 'FechaCita', 'MotivoCita', 'FechaSistema', 'Estado', 'IdPaciente', 'IdProfesional'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
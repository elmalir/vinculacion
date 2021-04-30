<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Imagen_Model extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'IdCitaGeneral', 'IdCitaOdontologia', 'Nombre', 'Ruta', 'Observacion', 'Imagen'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
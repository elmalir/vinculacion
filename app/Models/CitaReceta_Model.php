<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class CitaReceta_Model extends Model
{
	protected $table = 'recetacitageneral';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'IdCitaGeneral', 'Diagnostico', 'Medicamento', 'Dosis'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
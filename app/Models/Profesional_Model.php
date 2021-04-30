<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Profesional_Model extends Model
{
	protected $table = 'profesionales';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'Identificacion', 'Nombre', 'Especialidad', 'Correo', 'Direccion', 'Telefono', 'Celular', 'FormacionAcademica', 'IdEmpresa'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
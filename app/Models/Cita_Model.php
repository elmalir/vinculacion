<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Cita_Model extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'Fecha', 'MotivoConsulta', 'Anamnesis', 'ExamenFisico', 'Talla', 'Peso', 'PresionArterial', 'Pulso', 'MasaCorporal', 'PerímetroCefálico', 'Diagnostico', 'Tratamiento', 'IdEmpresa', 'FechaSistema', 'IdProfesional', 'IdPaciente'];
	//protected $useSoftDeletes = true;
	//protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
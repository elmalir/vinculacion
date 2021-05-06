<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Paciente_Model extends Model
{
	protected $table = 'pacientes';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'array';
	protected $allowedFields = ['Id', 'Identificacion', 'Nombre', 'FechaNacimiento', 'Sexo', 'Etnia', 'EstadoCivil', 'Correo', 'Telefono', 'Celular', 'Direccion', 'ContactoEmergencia', 'AntecedentePatalogico', 'Contrasenia', 'GrupoSanguineo', 'Ocupacion', 'IdEmpresa', 'IdProvincia', 'IdCiudad'];
	protected $useSoftDeletes = true;
	protected $useTimestamps = false;
	//protected $validationRules    = [];
    //protected $validationMessages = [];
	//protected $skipValidation  = false;

}

?>
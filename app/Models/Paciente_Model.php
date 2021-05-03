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
	protected $typeReturn = 'object';
	protected $allowedFields = ['Id', 'Identificacion', 'Nombre', 'FechaNacimiento', 'Sexo', 'Etnia', 'EstadoCivil', 'Correo', 'Telefono', 'Celular', 'Direccion', 'ContactoEmergencia', 'AntecedentePatalogico', 'Contrasenia', 'GrupoSanguineo', 'Ocupacion', 'IdEmpresa', 'IdProvincia', 'IdCiudad'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = true; //‘created_at’ and ‘updated_at’ in the table
	protected $validationRules    = [
		'Identificacion' => 'required|numeric|min_length[10]|is_unique[pacientes.Identificacion, Id,{Id}]',
		'Correo' => 'required|valid_email|is_unique[pacientes.Correo,Id,{Id}]',
		'Contrasenia' => 'required|alpha_numeric',
	];
    protected $validationMessages = [
    	'Identificacion' => [
    						'required' => 'El campo Identificación es obligatorio',
    						'numeric' => 'El campo debe contener dígitos numéricos',
    						'is_unique' => 'La Identificación ya se encuentra registrada'
    	],
    	'Contrasenia' => [
    						'required' => 'El campo Contraseña es obligatorio',
    						'alpha_numeric' => 'El campo Contraseña debe contener almenos 8 caracteres'
    	],
    	'Correo' => [
    						'required' => 'El campo Correo es obligatorio',
    						'is_unique' => 'El Correo ya se encuentra en uso',
    						'valid_email' => 'Ingrese Correo válido'
    	]
    ];
	protected $skipValidation  = false;

	//public function getEmpresa()
	//{
		//$emp = $this->db->table('empresa');
		//return $emp->get()->getResultArray();
	//}

}

?>
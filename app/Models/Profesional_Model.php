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
	protected $typeReturn = 'object';
	protected $allowedFields = ['Id', 'Identificacion', 'Nombre', 'Especialidad', 'Correo', 'Contrasenia', 'Direccion', 'Telefono', 'Celular', 'FormacionAcademica'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = true; //‘created_at’ and ‘updated_at’ in the table
	protected $validationRules    = [
		'Identificacion' => 'required|numeric|min_length[10]|is_unique[profesionales.Identificacion, Id,{Id}]',
		'Nombre' => 'required',
		'Correo' => 'required|valid_email|is_unique[profesionales.Correo,Id,{Id}]',
		'Contrasenia' => 'required',
	];
    protected $validationMessages = [
    	'Identificacion' => [
    						'required' => 'El campo Identificación es obligatorio',
    						'numeric' => 'El campo debe contener unicamente dígitos numéricos',
    						'is_unique' => 'La Identificación ya se encuentra registrada',
    						'min_length' => 'El campo Identificación debe tener 10 digitos'
    	],
    	'Nombre' => [
    						'required' => 'El campo Nombre es obligatorio',
    	],
    	'Correo' => [
    						'required' => 'El campo Correo es obligatorio',
    						'is_unique' => 'El Correo ingresado ya se encuentra en uso',
    						'valid_email' => 'Ingrese Correo válido'
    	],
    	'Contrasenia' => [
    						'required' => 'El campo Contaseña es obligatorio',
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
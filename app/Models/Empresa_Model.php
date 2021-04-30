<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Empresa_Model extends Model
{
	protected $table = 'empresa';
	protected $primaryKey = 'Id';
	protected $useAutoIncrement = true;
	protected $typeReturn = 'object';
	protected $allowedFields = ['Id', 'Identificacion', 'RazonSocial', 'NombreComercial', 'Direccion', 'Correo', 'Telefono', 'Celular', 'IdProvincia', 'IdCiudad'];
	protected $useSoftDeletes = true;
	//protected $useTimestamps = true; //‘created_at’ and ‘updated_at’ in the table
	protected $validationRules    = [
		'Identificacion' => 'required|numeric|min_length[10]|is_unique[empresa.Identificacion, Id,{Id}]',
		'Correo' => 'required|valid_email|is_unique[empresa.Correo,Id,{Id}]',
		'RazonSocial' => 'required|alpha_numeric',
	];
    protected $validationMessages = [
    	'Identificacion' => [
    						'required' => 'El campo Identificación es obligatorio',
    						'numeric' => 'El campo debe contener dígitos numéricos',
    						'is_unique' => 'La Identificación ya se encuentra registrada'
    	],
    	'RazonSocial' => [
    						'required' => 'El campo Razón Social es obligatorio',
    						'alpha_numeric' => 'El campo Razón Social no debe contener carctares especiales'
    	],
    	'Correo' => [
    						'required' => 'El campo Correo es obligatorio',
    						'is_unique' => 'El Correo debe ser único',
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
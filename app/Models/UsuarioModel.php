<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
					'identificacion',
					'nombre',
					'correo',
					'contrasenia',
					'direccion',
					'telefono',
					'celular',
					'observacion',
					'grupousuario_id'
				];
	protected $useTimestamps = true; //true->Para que ocupe los campos automáticos
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
		'identificacion' => 'required|numeric|min_length[5]|is_unique[usuarios.identificacion, id,{id}]',
		'nombre' => 'required|min_length[8]|is_unique[usuarios.nombre, id,{id}]',
		'correo' => 'required|valid_email|is_unique[usuarios.nombre, id,{id}]',
		'contrasenia' => 'required|min_length[5]|alpha_numeric'
	];
    protected $validationMessages = [
    	'identificacion' => [
            'required' => 'El campo Identificación es obligatorio',
            'numeric' => 'El campo Identificación debe contener sólo números',
            'is_unique' => 'El campo Identificación ya se encuentra registrado',
            'min_length' => 'El campo Identificación debe tener mínimo 5 dígitos'
    	],
    	'nombre' => [
            'required' => 'El campo Nombre es obligatorio',
            'min_length' => 'El campo Nombre debe tener mínimo 8 dígitos'
    	],
    	'correo' => [
            'required' => 'El campo Correo es obligatorio',
            'valid_email' => 'El campo Correo no fue validado'
        ],
        'contrasenia' => [
            'required' => 'El campo Contraseña es obligatorio',
            'min_length' => 'El campo Contraseña debe tener mínimo 5 dígitos',
            'alpha_numeric' => 'El campo Contraseña debe tener dígitos entre números y letras sin caracteres especiales'
		]
    ];
	protected $skipValidation  = false;

    function getUsuarios(){
        $builder = $this->db->table('usuarios u');
        $builder->select('u.id, u.identificacion, u.nombre, u.correo, u.direccion, u.telefono, u.celular, u.observacion, gu.nombre as grupousuario');
        $builder->join('gruposusuarios gu', 'gu.id = u.grupousuario_id');
        $builder->where('u.deleted_at',null);
        return $builder->get()->getResult();
    }
}
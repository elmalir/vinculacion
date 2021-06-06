<?php 
namespace App\Models;

use CodeIgniter\Model;

class GremioModel extends Model{
    protected $table      = 'gremios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
					'identificacion',
					'razonSocial',
					'nombreComercial',
					'representanteLegal',
					'direccion',
					'correo',
					'telefono',
					'celular',
					'observacion'
				];
	protected $useTimestamps = true; //true->Para que ocupe los campos automáticos
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
        'identificacion' => 'required|numeric|min_length[5]|is_unique[gremios.identificacion, id,{id}]',
		'razonSocial' => 'required|min_length[8]|is_unique[gremios.razonSocial, id,{id}]',
		'correo' => 'required|valid_email'
	];
    protected $validationMessages = [
    	'identificacion' => [
            'required' => 'El campo Identificación es obligatorio',
            'numeric' => 'El campo Identificación debe contener sólo números',
            'is_unique' => 'El campo Identificación ya se encuentra registrado',
            'min_length' => 'El campo Identificación debe tener mínimo 5 dígitos'
    	],
    	'razonSocial' => [
            'required' => 'El campo Razón Social es obligatorio',
            'min_length' => 'El campo Razón Social debe tener mínimo 8 dígitos',
            'is_unique' => 'El campo Razón Social ya se encuentra registrado'
    	],
    	'correo' => [
            'required' => 'El campo Correo es obligatorio',
            'valid_email' => 'El campo Correo no fue validado'
        ]
    ];
	protected $skipValidation  = false;

}
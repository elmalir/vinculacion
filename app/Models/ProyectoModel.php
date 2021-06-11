<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProyectoModel extends Model{
    protected $table      = 'proyectos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
					'codigo',
					'nombre',
					'periodo',
					'area',
					'linea',
					'dominio',
					'proyecto',
					'facultad',
					'carrera',
					'coordinador',
					'tutor',
					'cooperantes',
					'encargado',
					'ciudad',
					'fechaRegistro',
					'tiempo',
					'numeroParticipantes',
					'numeroVeneficiarios',
					'numeroTutores'
				];
	protected $useTimestamps = true; //true->Para que ocupe los campos automáticos
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
		'codigo' => 'required|min_length[3]|is_unique[proyectos.codigo, id,{id}]',
		'nombre' => 'required|min_length[8]|is_unique[proyectos.nombre, id,{id}]',
		'tiempo' => 'numeric',
		'numeroParticipantes' => 'numeric',
		'numeroVeneficiarios' => 'numeric',
		'numeroTutores' => 'numeric'
	];
    protected $validationMessages = [
    	'codigo' => [
    						'required' => 'El campo Código es obligatorio',
    						'is_unique' => 'El campo Código ya se encuentra registrado',
    						'min_length' => 'El campo Código debe tener mínimo 3 dígitos'
    	],
    	'nombre' => [
    						'required' => 'El campo Nombre es obligatorio',
							'min_length' => 'El campo Nombre debe tener mínimo 8 dígitos'
    	],
    	'tiempo' => [
    						'numeric' => 'El campo Tiempo es obligatorio',
    						'required' => 'El campo Tiempo es obligatorio'
		],
		'numeroParticipantes' => [
			'numeric' => 'El campo Número de Participantes debe contener valores numéricos'
		]
    ];
	protected $skipValidation  = false;

}
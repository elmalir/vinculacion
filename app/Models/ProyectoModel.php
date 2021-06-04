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
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
		'codigo' => 'required|min_length[3]|is_unique[proyectos.codigo, id,{id}]',
		'nombre' => 'required|min_length[3]|is_unique[proyectos.nombre, id,{id}]',
		'tiempo' => 'numeric',
		'numeroParticipantes' => 'numeric',
		'numeroVeneficiarios' => 'numeric',
		'numeroTutores' => 'numeric'
	];
	protected $validationMessages = [];
	protected $skipValidation  = false;




}
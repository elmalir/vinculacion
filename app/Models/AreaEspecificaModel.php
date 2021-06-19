<?php 
namespace App\Models;

use CodeIgniter\Model;

class AreaEspecificaModel extends Model{
    protected $table      = 'areasespecificas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'descripcion', 'activo', 'areageneral_id'];

    protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
		'nombre' => 'required|min_length[5]|is_unique[areasgenerales.nombre, id,{id}]'
	];
    protected $validationMessages = [
    	'nombre' => [
            'required' => 'El campo Nombre es obligatorio',
            'min_length' => 'El campo Nombre debe tener mínimo 8 dígitos',
            'is_unique' => 'El campo Nombre ya se encuentra registrado',
    	]
    ];
    protected $skipValidation     = false;

}
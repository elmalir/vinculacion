<?php 
namespace App\Models;

use CodeIgniter\Model;

class GrupoUsuarioModel extends Model{
    // Uncomment below if you want add primary key
    protected $table      = 'gruposusuarios';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'observacion', 'proyecto_id'];

    protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
		'nombre' => 'required|min_length[5]|is_unique[gruposusuarios.nombre, id,{id}]'
	];
    protected $validationMessages = [
    	'nombre' => [
    						'required' => 'El campo Nombre es obligatorio',
							'min_length' => 'El campo Nombre debe tener mínimo 8 dígitos',
                            'is_unique' => 'El campo Nombre ya se encuentra registrado',
    	]
    ];
    protected $skipValidation     = false;
    
    function getGruposUsuarios(){
        $builder = $this->db->table('gruposusuarios gu');
        $builder->select('gu.id, gu.nombre, gu.observacion, p.nombre as proyecto');
        $builder->join('proyectos p', 'p.id = gu.proyecto_id');
        return $builder->get()->getResult();
    }
 
}
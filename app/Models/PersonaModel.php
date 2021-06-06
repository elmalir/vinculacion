<?php 
namespace App\Models;

use CodeIgniter\Model;

class PersonaModel extends Model{
    protected $table      = 'personas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
        'identificacion',
        'nombre',
        'correo',
        'direccion',
        'telefono',
        'celular',
        'observacion',
        'activo',
        'gremio_id'
    ];
    protected $useTimestamps = true; //true->Para que ocupe los campos automáticos
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
		'identificacion' => 'required|numeric|min_length[5]|is_unique[usuarios.identificacion, id,{id}]',
		'nombre' => 'required|min_length[8]|is_unique[usuarios.nombre, id,{id}]',
		'correo' => 'required|valid_email'
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
        ]
    ];
	protected $skipValidation  = false;

    function getOnePersonas($id){
        $builder = $this->db->table('personas p');
        $builder->select('p.identificacion, p.nombre, p.correo, p.direccion, p.telefono, p.celular, p.observacion, p.activo, g.razonSocial as gremio');
        $builder->join('gremios g', 'g.id = p.gremio_id');
        //$builder->where('p.deleted_at',null);
        $builder->where('p.id', $id);
        return $builder->get()->getResult();
        //return $builder->get();
    }
}
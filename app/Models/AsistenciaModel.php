<?php 
namespace App\Models;

use CodeIgniter\Model;

class AsistenciaModel extends Model{
    protected $table      = 'asistencias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = [
					'areageneral_id',
					'areaespecifica_id',
					'persona_id',
					'fecha',
					'fechaInicio',
					'fechaFin',
					'problema',
					'solucion',
					'observacion',
					'proyecto_id',
					'usuario_id'
				];
	protected $useTimestamps = true; //true->Para que ocupe los campos automáticos
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [
		'fecha' => 'required',
		'problema' => 'required|min_length[5]',
		'solucion' => 'required|min_length[5]'
	];
    protected $validationMessages = [
        'fecha' => [
            'required' => 'El campo Fecha es obligatorio'
    	],
    	'problema' => [
            'required' => 'El campo Ploblema es obligatorio',
            'min_length' => 'El campo Ploblema debe tener mínimo 5 dígitos'
    	],
    	'solucion' => [
            'required' => 'El campo Solución es obligatorio',
            'min_length' => 'El campo Solución debe tener mínimo 5 dígitos'
    	]
    ];
	protected $skipValidation  = false;

    function getAsistenciasByProyecto($id){
        $builder = $this->db->table('asistencias a');
        $builder->select('a.id, a.fecha, concat(p.identificacion,"  ", p.nombre) as persona, ag.nombre as areageneral, ae.nombre as areaespecifica, a.problema');
        $builder->join('areasgenerales ag', 'ag.id = a.areageneral_id', 'inner');
        $builder->join('areasespecificas ae', 'ae.id = a.areaespecifica_id', 'inner');
        $builder->join('personas p', 'p.id = a.persona_id', 'inner');
        $builder->where('a.deleted_at',null);
        $builder->where('a.proyecto_id', $id);
        return $builder->get()->getResult();
    }
    function getOneAsistenciasByProyecto($id, $idProyecto){
        $builder = $this->db->table('asistencias a');
        $builder->select('a.id, a.fecha, concat(p.identificacion,"  ", p.nombre) as persona, ag.nombre as areageneral, ae.nombre as areaespecifica, a.problema, a.solucion, a.observacion');
        $builder->join('areasgenerales ag', 'ag.id = a.areageneral_id', 'inner');
        $builder->join('areasespecificas ae', 'ae.id = a.areaespecifica_id', 'inner');
        $builder->join('personas p', 'p.id = a.persona_id', 'inner');
        $builder->where('a.deleted_at',null);
        $builder->where('a.id', $id)->where('a.proyecto_id', $idProyecto);
        return $builder->get()->getResult();
    }

}
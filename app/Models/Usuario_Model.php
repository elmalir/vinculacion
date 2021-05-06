<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_Model extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Id', 'Nombre', 'Correo', 'Contrasenia', 'IdRol', 'Activo', 'IdEmpresa'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getUsuario($user, $passwd)
    {
        //$db = \Config\Database::connect();
        $builder = $this->db->table('usuarios');
        $builder->where('Nombre', $user)->where('Contrasenia', $passwd);
        return $builder->get()->getResultArray();
    }
}
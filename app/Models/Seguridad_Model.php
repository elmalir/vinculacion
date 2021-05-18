<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class Seguridad_Model extends Model
{
	public function getAllRolesByIdEmpresa1($idEmpresa)
    {
        $builder = $this->db->table('roles');
        $builder->where('IdEmpresa', $idEmpresa);
        return $builder->get()->getResultArray();
    }
    public function getAllRolesByIdEmpresa($idEmpresa)
    {
        $builder = $this->db->table('roles');
        $builder->where('IdEmpresa', $idEmpresa);
        return $builder->get()->getResult();
    }
    public function getOneProfesional($mail, $passwd)
    {
        $builder = $this->db->table('profesionales');
        $builder->where('Correo', $mail)->where('Contrasenia', $passwd);
        return $builder->get()->getResult();
    }

}

?>
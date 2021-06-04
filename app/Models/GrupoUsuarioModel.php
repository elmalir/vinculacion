<?php 
namespace App\Models;

use CodeIgniter\Model;

class GrupoUsuario_Model extends Model{
    protected $table      = 'gruposusuarios';
    
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'observacion'];
}
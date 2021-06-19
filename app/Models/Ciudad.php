<?php 
namespace App\Models;

use CodeIgniter\Model;

class Ciudad extends Model{
    protected $table      = 'ciudades';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['Nombre', 'IdProvincia'];

    protected $useTimestamps = false;
    protected $skipValidation     = false;

}
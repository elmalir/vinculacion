<?php 
namespace App\Models;

use CodeIgniter\Model;

class Provincia extends Model{
    protected $table      = 'provincias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['CodigoArea', 'Nombre'];

    protected $useTimestamps = false;
    protected $skipValidation     = false;

}
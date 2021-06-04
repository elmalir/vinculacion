<?php 
namespace App\Models;

use CodeIgniter\Model;

class PersonaModel extends Model{
    protected $table      = 'personas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'identificacion',
        'nombre',
        'correo',
        'direccion',
        'telefono',
        'celular',
        'observacion',
        'activo'
    ];
}
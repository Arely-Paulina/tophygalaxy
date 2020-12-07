<?php namespace App\Models;

use CodeIgniter\Model;

class personaModel extends Model
{
	protected $table      = 'personas';
    protected $primaryKey = 'idPersona';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellido', 'correo', 'telefono', 'contrasenia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
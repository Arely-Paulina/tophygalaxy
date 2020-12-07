<?php namespace App\Models;

use CodeIgniter\Model;

class publicacionModel extends Model
{
	protected $table      = 'publicacion';
    protected $primaryKey = 'idPublicacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['titulo', 'fecha', 'tipo', 'categoria', 'contenido', 'idUsuario', 'sinopsis', 'imagen' ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

  
}
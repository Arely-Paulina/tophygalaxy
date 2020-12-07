<?php namespace App\Models;

use CodeIgniter\Model;

class comentarioModel extends Model
{
	protected $table      = 'comentario';
    protected $primaryKey = 'idComentario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['fecha', 'autor', 'contenido', 'categoria', 'idPublicacion'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

  
}
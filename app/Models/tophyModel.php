<?php namespace App\Models;

use CodeIgniter\Model;

class tophyModel extends Model
{
	protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nickname', 'tipo', 'correoElectronico', 'contrasenia', 'imagen'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function obtenerUsuario($data){
        $usuario=$this->db->table('usuario');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
  
}
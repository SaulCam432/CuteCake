<?php namespace App\Models;

use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table      = 'administradores';
    protected $primaryKey = 'idAdministrador';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function obtenerAdmin($data){
        $Usuario = $this->db->table('administradores');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();

    }
}
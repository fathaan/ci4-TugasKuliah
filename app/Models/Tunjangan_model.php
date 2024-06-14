<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Tunjangan_model extends Model
{
    protected $table = 'tunjangan';
    protected $primaryKey = 'id_tunjangan';
    protected $allowedFields = ['id_tunjangan', 'nama_tunjangan'];
 
    public function getTunjangan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_tunjangan' => $id]);
        }
    }
 
    public function saveTunjangan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function hapusTunjangan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_tunjangan' => $id]);
    }
}
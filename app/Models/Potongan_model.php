<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Potongan_model extends Model
{
    protected $table = 'potongan';
    protected $primaryKey = 'id_potongan';
    protected $allowedFields = ['id_potongan', 'nama_potongan'];
 
    public function getPotongan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_potongan' => $id]);
        }
    }
 
    public function savePotongan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function hapusPotongan($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_potongan' => $id]);
    }
}
<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Penggajian_model extends Model
{
    protected $table = 'penggajian';
 
    public function getPenggajian($id = false)
    {
        if ($id === false) {
            return $this->select('penggajian.*, employees.nama_karyawan, potongan.nama_potongan, tunjangan.nama_tunjangan')
                ->join('employees', 'employees.id = penggajian.id')
                ->join('potongan', 'potongan.id_potongan = penggajian.id_potongan')
                ->join('tunjangan', 'tunjangan.id_tunjangan = penggajian.id_tunjangan')
                ->findAll();
        } else {
            return $this->select('penggajian.*, employees.nama_karyawan, potongan.nama_potongan, tunjangan.nama_tunjangan')
                ->join('employees', 'employees.id = penggajian.id')
                ->join('potongan', 'potongan.id_potongan = penggajian.id_potongan')
                ->join('tunjangan', 'tunjangan.id_tunjangan = penggajian.id_tunjangan')
                ->getWhere(['id_penggajian' => $id]);
        }
    }

 
    public function savePenggajian($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editPenggajian($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_penggajian', $id);
        return $builder->update($data);
    }

    public function hapusPenggajian($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_penggajian' => $id]);
    }
}
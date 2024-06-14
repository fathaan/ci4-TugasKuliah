<?php
 
namespace App\Controllers\Admin;
 
use App\Controllers\BaseController;
use App\Models\Penggajian_model;
use App\Models\Employee_model;
use App\Models\Potongan_model;
use App\Models\Tunjangan_model;
 
class Penggajian extends BaseController
{
    public function index()
    {
        $model = new Penggajian_model;
        $data['title'] = 'Data Penggajian Gaji Karyawan';
        $data['getPenggajian'] = $model->getPenggajian();

        $employeeModel = new Employee_model;
        $data['employees'] = $employeeModel->findAll();

        $potonganModel = new Potongan_model;
        $data['potongans'] = $potonganModel->findAll();

        $tunjanganModel = new Tunjangan_model;
        $data['tunjangans'] = $tunjanganModel->findAll();


        echo view('admin/penggajian/index', $data);
    }
 
    public function add()
    {
        $model = new Penggajian_model;
        $data = array(
            'id'         => $this->request->getPost('id'),
            'id_potongan'         => $this->request->getPost('id_potongan'),
            'id_tunjangan'         => $this->request->getPost('id_tunjangan'),
            'gaji_bersih'         => $this->request->getPost('gaji_bersih'),
        );
        $model->savePenggajian($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Vaksinasi Karyawan");
                window.location="' . base_url('penggajian') . '"
            </script>';
    }

     public function edit($id)
     {
         $model = new Penggajian_model;
         $getPenggajian = $model->getPenggajian($id)->getRow();
         if (isset($getTunjangan)) {
             $data['penggajian'] = $getPenggajian;
             $data['title']  = 'Data Penggajian Karyawan';
 
             echo view('admin/header', $data);
             echo view('admin/penggajian/index', $data);
             echo view('admin/footer', $data);
         } else {
 
             echo '<script>
                     alert("ID karyawan ' . $id . ' Tidak ditemukan");
                     window.location="' . base_url('penggajian') . '"
                 </script>';
         }
     }
 
    public function update()
    {
        $model = new Penggajian_model;
        $id = $this->request->getPost('id_penggajian');
        $data = array(
            'id'         => $this->request->getPost('id'),
            'id_potongan'         => $this->request->getPost('id_potongan'),
            'id_tunjangan'         => $this->request->getPost('id_tunjangan'),
            'gaji_bersih'         => $this->request->getPost('gaji_bersih'),
        );
        $model->editTunjangan($data, $id);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('penggajian') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Penggajian_model;
        $getPenggajian = $model->getPenggajian($id)->getRow();
        if (isset($getPenggajian)) {
            $model->hapusPenggajian($id);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('penggajian') . '"
                </script>';
        } else {
 
            echo '<script>
                    alert("Gagal Menghapus !, ID karyawan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('penggajian') . '"
                </script>';
        }
    }
 
}
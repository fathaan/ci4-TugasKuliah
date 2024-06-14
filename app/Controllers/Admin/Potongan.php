<?php
 
 namespace App\Controllers\Admin;

 use App\Controllers\BaseController;
 use App\Models\Potongan_model;
 
class Potongan extends BaseController
{
    public function index()
    {
        $model = new Potongan_model;
        $data['getPotongan'] = $model->getPotongan();
        echo view('admin/potongan/index', $data);
    }
 
    public function add()
    {
        $model = new Potongan_model;
        $data = array(
            'nama_potongan'     => $this->request->getPost('nama_potongan'),
            'jumlah_potongan'   => $this->request->getPost('jumlah_potongan')
        );
        $model->savePotongan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Potongan Gaji Potongan");
                window.location="' . base_url('tugas/employee/potongan') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Potongan_model;
        $getPotongan = $model->getPotongan($id)->getRow();
        if (isset($getPotongan)) {
            $model->hapusPotongan($id);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('tugas/employee/potongan') . '"
                </script>';
        } else {
 
            echo '<script>
                    alert("Gagal Menghapus !, ID Potongan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('tugas/employee/potongan') . '"
                </script>';
        }
    }
 
}
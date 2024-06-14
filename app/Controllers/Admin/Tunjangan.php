<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Tunjangan_model;

class Tunjangan extends BaseController
{
    public function index()
    {
        $model = new Tunjangan_model;
        $data['getTunjangan'] = $model->getTunjangan();
        echo view('admin/tunjangan/index', $data);
    }

    public function add()
    {
        $model = new Tunjangan_model;
        $data = array(
            'nama_tunjangan'     => $this->request->getPost('nama_tunjangan'),
            'jumlah_tunjangan'   => $this->request->getPost('jumlah_tunjangan')
        );
        $model->saveTunjangan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data tunjangan Gaji tunjangan");
                window.location="' . base_url('tugas/employee/tunjangan') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Tunjangan_model;
        $getTunjangan = $model->getTunjangan($id)->getRow();
        if (isset($getTunjangan)) {
            $model->hapusTunjangan($id);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('tugas/employee/tunjangan') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Gagal Menghapus !, ID tunjangan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('tugas/employee/tunjangan') . '"
                </script>';
        }
    }
}

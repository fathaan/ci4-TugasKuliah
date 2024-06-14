<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Users_model;

class Users extends BaseController
{
    public function index()
    {
        $model = new Users_model;
        $data['getUsers'] = $model->getUsers();
        echo view('admin/users/index', $data);
    }

    public function add()
    {
        $model = new Users_model;
        $data = array(
            'email'     => $this->request->getPost('email'),
            'username'   => $this->request->getPost('username'),
            'password'   => $this->request->getPost('password')
        );
        $model->saveTunjangan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Account");
                window.location="' . base_url('account') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Users_model;
        $getTunjangan = $model->getTunjangan($id)->getRow();
        if (isset($getTunjangan)) {
            $model->hapusTunjangan($id);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('account') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Gagal Menghapus !, ID Users ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('account') . '"
                </script>';
        }
    }
}

<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Employee_model;

class Employee extends BaseController
{
    public function index()
    {
        $model = new Employee_model;
        $data['getKaryawan'] = $model->getKaryawan();
        echo view('admin/employee/index', $data);
    }

    public function add()
    {
        $model = new Employee_model;
        $data = array(
            'nama_karyawan'     => $this->request->getPost('nama_karyawan'),
            'usia'              => $this->request->getPost('usia'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'jenis_kelamin'     => $this->request->getPost('jenis_kelamin'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'alamat'            => $this->request->getPost('alamat'),
            'no_hp'             => $this->request->getPost('no_hp'),
            'status_vaksin_1'   => $this->request->getPost('status_vaksin_1'),
            'status_vaksin_2'   => $this->request->getPost('status_vaksin_2')
        );
        $model->saveKaryawan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Vaksinasi Karyawan");
                window.location="' . base_url('tugas/employee') . '"
            </script>';
    }

    public function edit($id)
    {
        $model = new Employee_model;
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if (isset($getKaryawan)) {
            $data['employee'] = $getKaryawan;
            $data['title']  = 'Edit';

            echo view('admin/header', $data);
            echo view('admin/edit_view', $data);
            echo view('admin/footer', $data);
        } else {

            echo '<script>
                    alert("ID karyawan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('tugas/employee') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Employee_model;
        $id = $this->request->getPost('id');
        $data = array(
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'usia'         => $this->request->getPost('usia'),
            'status_vaksin_1'  => $this->request->getPost('status_vaksin_1'),
            'status_vaksin_2'  => $this->request->getPost('status_vaksin_2')
        );
        $model->editKaryawan($data, $id);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('tugas/employee') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Employee_model;
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if (isset($getKaryawan)) {
            $model->hapusKaryawan($id);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('tugas/employee') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Gagal Menghapus !, ID karyawan ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('tugas/employee') . '"
                </script>';
        }
    }
}

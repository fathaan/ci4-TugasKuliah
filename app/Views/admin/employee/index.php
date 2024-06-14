<?= $this->extend('admin/layout/template') ?>
<?= $this->Section('content') ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">DATA KARYAWAN</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Usia</th>
                                        <th>Jabatan</th>
                                        <th>J.Kelamin</th>
                                        <th>No HP/WA</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getKaryawan as $krywn) { ?>
                                        <tr class="text-primary">
                                            <td><?= $no; ?></td>
                                            <td><?= $krywn['nama_karyawan']; ?></td>
                                            <td><?= $krywn['usia']; ?></td>
                                            <td><?= $krywn['jabatan']; ?></td>
                                            <td><?= $krywn['jenis_kelamin']; ?></td>
                                            <td><?= $krywn['no_hp']; ?></td>
                                            <td>
                                                <a href="<?= base_url('employee/edit/' . $krywn['id']); ?>" class="btn btn-success m-1" data-target="#editModal">
                                                    Edit</a>
                                                <a href="<?= base_url('employee/hapus/' . $krywn['id']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data karyawan?')" class="btn btn-danger m-1">
                                                    Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right mt-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FORM NAMBAH DATA -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('employee/add'); ?>">
                    <div class="form-group">
                        <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                    </div>
                    <div class="form-group">
                        <label for="usia" class="col-form-label">Usia</label>
                        <input type="text" class="form-control" id="usia" name="usia">
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="">---Pilih Jenis Kelamin---</option>
                            <option value="Laki-laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">No HP/WA</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('') ?>
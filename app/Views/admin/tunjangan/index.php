<?= $this->extend('admin/layout/template') ?>
<?= $this->Section('content') ?>

<!-- ISI KONTEN -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">DATA TUNJANGAN</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th></th>
                                        <th>Nama Tunjangan</th>
                                        <th>Jumlah Biaya Tunjangan Perbulan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getTunjangan as $tnjngn) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $tnjngn['nama_tunjangan']; ?></td>
                                            <td><?= $tnjngn['jumlah_tunjangan']; ?></td>
                                            <td>
                                                <a href="<?= base_url('tugas/employee/tunjangan/hapus/' . $tnjngn['id_tunjangan']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data Tunjangan ini?')" class="btn btn-danger m-1">Hapus</a>
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
<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Tunjangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('tugas/employee/tunjangan/add'); ?>">
                    <div class="form-group">
                        <label for="nama_tunjangan" class="col-form-label">Nama Tunjangan</label>
                        <input type="text" class="form-control" id="nama_tunjangan" name="nama_tunjangan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tunjangan" class="col-form-label">Jumlah Tunjanagan Perbulan</label>
                        <input type="text" class="form-control" id="jumlah_tunjangan" name="jumlah_tunjangan">
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
<!-- END KONTEN -->

<?= $this->endSection('') ?>
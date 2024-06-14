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
                            <h4 class="card-title">DATA POTONGAN</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th></th>
                                        <th>Nama Potongan</th>
                                        <th>Jumlah Biaya Potongan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getPotongan as $ptngn) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $ptngn['nama_potongan']; ?></td>
                                            <td><?= $ptngn['jumlah_potongan']; ?></td>
                                            <td>
                                                <a href="<?= base_url('tugas/employee/potongan/hapus/' . $ptngn['id_potongan']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data potongan ini?')" class="btn btn-danger m-1">Hapus</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Potongan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('tugas/employee/potongan/add'); ?>">
                    <div class="form-group">
                        <label for="nama_potongan" class="col-form-label">Nama Potongan</label>
                        <input type="text" class="form-control" id="nama_potongan" name="nama_potongan">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_potongan" class="col-form-label">Jumlah Biaya Potongan Perbulan</label>
                        <input type="text" class="form-control" id="jumlah_potongan" name="jumlah_potongan">
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
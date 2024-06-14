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
                            <h4 class="card-title">DATA PENGGAJIAN</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover">

                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th></th>
                                        <th>Nama Karyawan</th>
                                        <th>Potongan per Bulan</th>
                                        <th>Tunjangan per Bulan</th>
                                        <th>Gaji Bersih</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getPenggajian as $gaji) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $gaji['nama_karyawan']; ?></td>
                                            <td><?= $gaji['nama_potongan']; ?></td>
                                            <td><?= $gaji['nama_tunjangan']; ?></td>
                                            <td><?= $gaji['gaji_bersih']; ?></td>
                                            <td>
                                                <a href="<?= base_url('penggajian/hapus/' . $gaji['id_penggajian']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data penggajian?')" class="btn btn-danger m-1">
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
<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Gaji Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('penggajian/add'); ?>">
                    <div class="form-group">
                        <label for="id" class="col-form-label">Nama Karyawan</label>
                        <select class="form-control" name="id">
                            <option value="">Pilih Karyawan</option>
                            <?php foreach ($employees as $employee) { ?>
                                <option value="<?= $employee['id']; ?>"><?= $employee['nama_karyawan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_potongan" class="col-form-label">Potongan</label>
                        <select class="form-control" name="id_potongan">
                            <option value="">Pilih Potongan</option>
                            <?php foreach ($potongans as $potongan) { ?>
                                <option value="<?= $potongan['id_potongan']; ?>"><?= $potongan['nama_potongan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_tunjangan" class="col-form-label">Tunjangan</label>
                        <select class="form-control" name="id_tunjangan">
                            <option value="">Pilih Tunjangan</option>
                            <?php foreach ($tunjangans as $tunjangan) { ?>
                                <option value="<?= $tunjangan['id_tunjangan']; ?>"><?= $tunjangan['nama_tunjangan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gaji_bersih" class="col-form-label">Gaji Bersih</label>
                        <input type="text" class="form-control" id="gaji_bersih" name="gaji_bersih">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END KONTEN -->

<?= $this->endSection('') ?>
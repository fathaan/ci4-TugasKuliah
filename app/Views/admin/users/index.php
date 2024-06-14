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
                            <h4 class="card-title">ALL ACCOUNT</h4>
                        </center>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="bg-primary text-light">
                                        <th></th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getUsers as $usr) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $usr['email']; ?></td>
                                            <td><?= $usr['username']; ?></td>
                                            <td>
                                                <a href="<?= base_url('account/hapus/' . $usr['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data Users ini?')" class="btn btn-danger m-1">Hapus</a>
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
<!-- END KONTEN -->

<?= $this->endSection('') ?>
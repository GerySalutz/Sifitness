<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Bukti Transfer</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($paket as $p) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['nama_paket']; ?></td>
                            <td><?= $p['tanggal']; ?></td>
                            <td><img src="<?= base_url('assets/img/bukti_tf/') . $p['bukti_tf']; ?>" class="card-img" style="width: 100px;"></td>
                            <td>
                                <a href="<?= base_url('transaksi/delete/') . $p['id_transaksi']; ?>" onclick="return confirm('Kamu yakin akan menghapus transaksi ini ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- /.container-fluid -->
<!-- End of Main Content -->
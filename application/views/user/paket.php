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
                         <th scope="col">Nama Paket</th>
                         <th scope="col">Harga</th>
                         <th scope="col">Benefit</th>
                         <th scope="col">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $a = 1;
                        foreach ($paket as $p) { ?>
                         <tr>
                             <th scope="row"><?= $a++; ?></th>
                             <td><?= $p['nama_paket']; ?></td>
                             <td><?= $p['harga_paket']; ?></td>
                             <td><?= $p['benefit']; ?></td>
                             <td>
                                 <a href="<?= base_url('transaksi/bayar/' . $p['id_paket']) ?>" class="badge badge-info"><i class="fa fa-credit-card"></i> Pilih & Bayar</a>
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
 <!-- /.container-fluid -->
 <!-- End of Main Content -->
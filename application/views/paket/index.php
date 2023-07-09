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
                   <a href="paket/add_new" class="btn btn-dark mb-3"><i class="fas fa-filealt"></i>Paket Baru</a>
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
                                       <a href="<?= base_url('paket/get_edit/') . $p['id_paket']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                       <a href="<?= base_url('paket/delete/') . $p['id_paket']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $title . '' . $p['nama_paket']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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
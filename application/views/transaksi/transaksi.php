<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Product</title> <!-- load bootstrap css file -->
</head>

<body>
    <div class="container">
        <h1>
            <center>Bayar Paket</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('transaksi/selesai'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Paket</label> <input type="text" class="form-control" name="nama_paket" value="<?php echo $nama_paket; ?>" placeholder="Nama Paket" readonly>
                </div>
                <div class="form-group"> <label>Harga Paket</label> <input type="text" class="form-control" name="harga_paket" value="<?php echo $harga_paket; ?>" placeholder="Harga Paket" readonly> </div>
                <div class="form-group">
                    <label>Benefit</label> <input type="text" class="form-control" name="benefit" value="<?php echo $benefit; ?>" placeholder="Benefit" readonly>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
                <br>
                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>">
                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id') ?>">
                <br>
                <button type="submit" class="btn btn-dark">Bayar</button>
            </form>
        </div>
    </div> <!-- load jquery js file -->
</body>

</html>
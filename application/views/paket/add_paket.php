<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Product</title> <!-- load bootstrap css file -->
</head>

<body>
    <div class="container">
        <h1>
            <center>Tambah Paket</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('paket/save'); ?>" method="post">
                <div class="form-group">
                    <label>Nama Paket</label> <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket">
                </div>
                <div class="form-group"> <label>Harga Paket</label> <input type="text" class="form-control" name="harga_paket" placeholder="Harga Paket"> </div> <input type="hidden" name="id_paket">
                <div class="form-group">
                    <label>Benefit</label> <input type="text" class="form-control" name="benefit"  placeholder="Benefit">
                </div> 
                <button type="submit" class="btn btn-dark">Add</button>
            </form>
        </div>
    </div> <!-- load jquery js file -->
</body>

</html>
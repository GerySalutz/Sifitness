<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Product</title> <!-- load bootstrap css file -->
</head>

<body>
    <div class="container">
        <h1>
            <center>Edit Paket</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('paket/update'); ?>" method="post">
                <div class="form-group">
                    <label>Nama Paket</label> <input type="text" class="form-control" name="nama_paket" value="<?php echo $nama_paket; ?>" placeholder="Nama Paket">
                </div>
                <div class="form-group"> <label>Harga Paket</label> <input type="text" class="form-control" name="harga_paket" value="<?php echo $harga_paket; ?>" placeholder="Harga Paket"> </div>
                <div class="form-group">
                    <label>Benefit</label> <input type="text" class="form-control" name="benefit" value="<?php echo $benefit; ?>" placeholder="Benefit">
                </div> 
                <input type="hidden" name="id_paket" value="<?php echo $id_paket ?>"> 
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div> <!-- load jquery js file -->
</body>

</html>
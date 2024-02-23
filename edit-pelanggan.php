<!doctype HTML>
<html>
<head>
    <title>Form Edit Data pelanggan</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pelanggan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi-pelanggan.php";
                $tampil=$koneksi->query("select * from pesanan where id_pesanan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_pesanan">Id_pesanan</label>
                        <input type="hidden" name="id_pesanan" value="<?php echo $row['id_pesanan']?>" class="form-control">
                        <input type="number" name="id_pesanan" value="<?php echo $row['io_pesanan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_kue">Nama_Kue</label>
                        <input type="text" name="nama_kue" value="<?php echo $row['nama_kue']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="item_kue">Item_kue</label>
                        <input type="text" name="item_kue" value="<?php echo $row['item_kuet']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga__kue">Harga_Kue</label>
                        <input type="text" name="harga_kue" value="<?php echo $row['harga_kue']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_kue">Total_Kue</label>
                        <input type="text" name="total_kue" value="<?php echo $row['total_kue']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat_pembeli">Alamat_Pembeli</label>
                        <textarea name="alamat_pembeli" class="form-control"><?php echo $row['alamat_pembeli']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

</body>
</html>
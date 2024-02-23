<!doctype HTML>
<html>
<head>
    <title>Form Input Data Pelanggan </title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pelanggan.php" method="POST">
                    <div class="form-group">
                        <label for="id_pesanan">Id_pesanan</label>
                        <input type="number" name="id_pesanan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_kue">Nama_Kue</label>
                        <input type="text" name="Nama_kue" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="item_kue">Item_Kue</label>
                        <input type="text" name="item_kue" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga_kue">Harga_Kue</label>
                        <input type="text" name="harga_kue" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_kue">Total_Kue</label>
                        <input type="text" name="total_kue" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat_pembeli">Alamat_Pembeli</label>
                        <textarea name="alamat_pembeli" class="form-control"></textarea>
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
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
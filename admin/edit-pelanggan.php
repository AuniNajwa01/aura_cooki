<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
      <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/plugins/datatable/style.css" rel="stylesheet">
    
    <!-- Feather Icons-->

</head>
 <body>
    <!-- Awal script Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="scrollspy">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="AuRa CAKE & COOKIES.php">AURA Cake & Cookies</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
                            <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
                        </li>
            <li>
                            <a href="About Us.php"><span class="glyphicon glyphicon-hand-down"></span> About Us</a>
                        </li>
                        <li class="active">
                            <a href="tampil-pelanggan.php"><span class="glyphicon glyphicon-folder-open"></span> Data Pelanggan</a>
                        </li>
             <li>
              <a href="Logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    <div class="container"><br><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pelanggan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi-pelanggan.php";
                $tampil=$koneksi->query("select * from pesanan where id_pesanan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_pesanan">Id_pesanan</label>
                        <input type="hidden" name="id_pesanan" value="<?php echo $row['id_pesanan']?>" class="form-control">
                        <input type="number" name="id_pesanan" value="<?php echo $row['id_pesanan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_kue">Nama_Kue</label>
                        <input type="text" name="nama_kue" value="<?php echo $row['nama_kue']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="item_kue">Item_Kue</label>
                        <input type="text" name="item_kue" value="<?php echo $row['item_kue']?>" class="form-control">
                    </div>
                          <div class="form-group">
                        <label for="harga_kue">harga_kue</label>
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

 <script src="../bootstrap/js/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/datatable/jquery.dataTables.js"></script>
    <script src="../bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTables').DataTable();
    });
  </body>
  </html> 
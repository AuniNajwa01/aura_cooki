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
    <br><br>
<div class="col-md-12">

<center><h1> Data Pelanggan</h1></center>
<div class="col-md-1"></div>
<div class="col-md-10 list-group-item-warning">
<?php

if(@$_GET['pesan']=="inputPelangganBerhasil"){
?>

<div class="alert alert-success">
  penyimpanan 1 Data Pelanggan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusPelangganBerhasil"){
?>

<div class="alert alert-success">
  1 Data Pelanggan berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editPelangganBerhasil"){
?>

<div class="alert alert-success">
  1 perubahan berhasil di Edit!
</div>

<?php

}

?>

    <table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
    
    <thead>
    <tr><center>
      <td><center><b>Kode Pesanan</b></center>
      </td><td><center><b>Nama Kue</b></center></td>
      <td><center><b>Item Kue </b></center></td>
      <td><center><b>Harga</b></center></td>
      <td><center><b>Total Kue</b></td>
        <td><center><b>Alamat Pembeli</b></td>
      <th>
                <a href="input-pelanggan.php">
                    <button class="btn btn-info glyphicon glyphicon-plus">
                     </button>

                </a>
      </th>
    </tr>
    </thead>
    <tbody>
    <?php

    include"koneksi-pelanggan.php";
$sql=$koneksi->query("select * from pesanan order by id_pesanan ASC");

while($row= $sql->fetch_assoc()){
  ?>

  <tr>
      <td><?php echo $row['id_pesanan']?></td>
      <td><?php echo $row['nama_kue']?></td>
      <td><?php echo $row['item_kue']?></td>
      <td><?php echo $row['harga_kue']?></td>
      <td><?php echo $row['total_kue']?></td>
      <td><?php echo $row['alamat_pembeli']?></td>
      <td>

             <a href="edit-pelanggan.php?id=<?php echo $row['id_pesanan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-pelanggan.php?id=<?php echo $row['id_pesanan']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

      </td>
    </tr>


</td>
<?php
  }
  ?>
  </tbody>

  </table></div></div>
        </center><br><br><br><br><br><br><br><br>
 <div class="col-md-12"><br><br><br><br><br><br><br><br><br><br><br>
                <br><center> Website AURA Cake & Cookies, design with <span class="glyphicon glyphicon-qrcode"></span> by Owner AURA Cake &Cookies<br/>
                <a href="index.php">Home </a> | <a href="Menu Cookies.php">Menu </a>| <a href="About Us.php">About Us </a>| <a href="tampil-pelanggan.php">Data Pelanggan </a><br/><br/>
                <label class="label label-danger">PERINGATAN</label>Semua informasi di halaman ini memiliki hak cipta, anda tidak diperkenankan untuk menyebarluaskan tanpa seijin pengelola website
                </center>
            </div>
        </div>
        </nav>

 
  </footer></center></td></center></tr></thead></table></div></div>
    <!-- Feather Icons-->

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
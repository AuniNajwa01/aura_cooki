<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AURA Cake & Cookies</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/styles.css" rel="stylesheet">
		<style>
      body {
        padding-top: 60px; 
      }
		</style>
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
							<a href="Menu Cookies.php"><span class="glyphicon glyphicon-cutlery"></span> Menu</a>
						</li>
            <li>
							<a href="About Us.php"><span class="glyphicon glyphicon-hand-down"></span> About Us</a>
						</li>
            <li>
							<a href="tampil-pelanggan.php"><span class="glyphicon glyphicon-folder-open"></span> Data Pelanggan</a>
						</li>
            <li>
							<a href="login.php"><span class="glyphicon glyphicon-folder-open"></span> Admin</a>
						</li>

          </ul>
        </div>
      </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Daftar Nama Pelanggan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-danger">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Id_pesanan</th><th>Nama_Kue</th><th>Item_Kue</th><th>Harga_kue</th><th>Total_Kue</th><th>Alamat_Pembeli</th>
                <th>
                    <a href="input-pelanggan.php">
                        <button class="btn btn-danger glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php
            include "koneksi-pelanggan.php";
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
                    <button class="btn btn-xs btn-primary glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pelanggan.php?id=<?php echo $row['id_pesanan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-success glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>
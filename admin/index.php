<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AURA Cake & Cookies</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
            <li class="active">
                            <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
                        </li>
            <li>
                            <a href="About Us.php"><span class="glyphicon glyphicon-hand-down"></span> About Us</a>
                        </li>
                        <li >
                            <a href="tampil-pelanggan.php"><span class="glyphicon glyphicon-folder-open"></span> Data Pelanggan</a>
                        </li>
             <li>
              <a href="Logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>   
   
         <div class="col-md-12"> 
                    <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#contoh-carousel" data-slide-to="1"></li>
                            <li data-target="#contoh-carousel" data-slide-to="2"></li>
                        </ol>
                         <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                <img src="KUE KERING/AuRa Cookies 1.jpeg" alt="Keterangan Gambar satu"  width="1317px" height="150px">
                                <div class="carousel-caption">
                                    
                                    <font face="serif">
                                    
                                    
                                </font>
                                </div>
                            </div>
                            <div class="item">
                                <img src="KUE KERING/Bola White Coklat.jpg" alt="Keterangan Gambar dua"  width="1317px" height="50px">
                                <div class="carousel-caption">
                                    
                              
                            
                                </div>
                            </div>
                            <div class="item">
                                <img src="KUE KERING/p1.jpg" alt="Keterangan Gambar dua"  width="1317px" height="20px">
                                <div class="carousel-caption">
                                    
                              
                            
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Prev</span>
                        </a>
                        <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a></p>
                    </div><br>
                 <div class="col-md-12"><br><br><br><br><br><br><br><br>
                <br><center> Website AURA Cake & Cookies, design with <span class="glyphicon glyphicon-qrcode"></span> by Owner AURA Cake &Cookies<br/>
                <a href="index.php">Home </a> | <a href="Menu Cookies.php">Menu </a>| <a href="About Us.php">About Us </a>| <a href="tampil-pelanggan.php">Data Pelanggan </a><br/><br/>
                <label class="label label-danger">PERINGATAN</label>Semua informasi di halaman ini memiliki hak cipta, anda tidak diperkenankan untuk menyebarluaskan tanpa seijin pengelola website
                </center>
            </div>
        </div>
        </nav>
                    
           
<script src="../bootstrap/js/jQuery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 
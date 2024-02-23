<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi-pelanggan.php";

$hapus=$koneksi->query("delete from pesanan where id_pesanan='$id'");

if($hapus==true){

    header("location:tampil-pelanggan.php?pesan=hapusPelangganBerhasil");

} else{
    echo "Error";
}


?>
<?php
  session_start();
  if (empty($_SESSION['id_user'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi-pelanggan.php";

$id=$_POST['id_pesanan'];
$nama_kue=$_POST['nama_kue'];
$item_kue=$_POST['item_kue'];
$harga_kue=$_POST['harga_kue'];
$total_kue=$_POST['total_kue'];
$alamat_pembeli=$_POST['alamat_pembeli'];

$nama_kue=$_POST['nama_kue'];
$ubah=$koneksi->query("update pesanan set nama_kue ='$nama_kue', item_kue='$item_kue', harga_kue='$harga_kue', 
total_kue='$total_kue', alamat_pembeli='$alamat_pembeli' where  id_pesanan='$id'");

if($ubah==true){

    header("location:tampil-pelanggan.php?pesan=editPelangganBerhasil");
} else{
    echo "Error";
}

?>
<?php

include "koneksi-pelanggan.php";

$id=$_POST['id_pesanan'];
$nama_kue=$_POST['nama_kue'];
$item_kue=$_POST['item_kue'];
$harga_kue=$_POST['harga_kue'];
$total_kue=$_POST['total_kue'];
$alamat_pembeli=$_POST['alamat_pembeli'];


$ubah=$koneksi->query("update pesanan set id_pesanan='$id_pesanan', nama_kue='$nama_kue', item_kue='$item_kue', harga_kue='$harga_kue', total_kue='$total_kue', alamat_pembeli='$alamat_pembeli' where id_pesanan='$id'");

if($ubah==true){

    header("location:tampil-pelanggan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>
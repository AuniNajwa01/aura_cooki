<?php

$id=$_POST['id_pesanan'];
$nama_kue=$_POST['nama_kue'];
$item_kue=$_POST['item_kue'];
$harga_kue=$_POST['harga_kue'];
$total_kue=$_POST['total_kue'];
$alamat_pembeli=$_POST['alamat_pembeli'];

include "koneksi-pelanggan.php";

$simpan=$koneksi->query("insert into pesanan(id_pesanan,nama_kue,item_kue,harga_kue,total_kue,alamat_pembeli) 
                        values ('$id_pesanan', '$nama_kue', '$item_kue', '$harga_kue','$total_kue','$alamat_pembeli')");

if($simpan==true){

    header("location:tampil-pelanggan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>
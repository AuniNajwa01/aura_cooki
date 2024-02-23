<?php

$id=$_GET['id'];

include "koneksi-pelanggan.php";

$hapus=$koneksi->query("delete from pesanan where id_pesanan='$id'");

if($hapus==true){

    header("location:tampil-pelanggan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>
<?php
session_start();
include "koneksi.php";
?>
<?php

$nomor_pesanan=$_POST['nomor_pesanan'];
$nomor_meja=$_POST['nomor_meja'];
$nama_makanan=$_POST['nama_makanan'];
$jumlah_pesanan=$_POST['jumlah_pesanan'];
$harga=$_POST['harga'];
$total_pesanan=$_POST['total_pesanan'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into makanan (nomor_pesanan,nomor_meja,nama_makanan,jumlah_pesanan,harga,total_pesanan,total_harga)
						values('$nomor_pesanan', '$nomor_meja', '$nama_makanan', '$jumlah_pesanan','$harga','$total_pesanan','$total_harga')");

if($simpan==true){

	header("location:tampil-penjualan.php?pesan=inputberhasil");
} else{
	echo "Erorrr";
}

?>
<?php 

include('koneksi.php');

$id = $_GET['id'];

$hapus= mysqli_query($koneksi, "DELETE FROM daftar_pesanan WHERE id_pemesan='$id'");

if($hapus)
	header('location: pesanan.php');
else
	echo "Hapus data gagal";

 ?>
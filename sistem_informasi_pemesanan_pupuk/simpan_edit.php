<?php 
include('koneksi.php');

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($_FILES['file']['tmp_name'], 'path/to/destination');
$edit = mysqli_query($koneksi, "UPDATE tambah_produk  SET nama_produk='$nama_produk', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_produk='$id_produk' ");

if($edit)
	header('location: daftar_produk.php');
else
	echo "Edit Produk Gagal";


 ?>
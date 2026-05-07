<?php
include 'koneksi1.php';
$nama_menu = $_POST['nama_menu'];
$kode_menu = $_POST['kode_menu'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$jenis = $_POST['jenis'];

mysqli_query($koneksi1, "INSERT INTO `daftar_menu`(`nama_menu`,`kode_menu`,`harga`,`stok`,`jenis`) VALUES ('$nama_menu','$kode_menu','$harga','$stok','$jenis')");
header("Location: daftar-menu.php");
<?php
include 'koneksi1.php';
$id = $_GET['id'];
$stok = $_POST['stok'];
$menu = mysqli_query($koneksi1, "SELECT * FROM `daftar_menu` WHERE `id` = '$id'");
$stok_lama = mysqli_fetch_array($menu);
$stok_baru = $stok_lama['stok'] + $stok;

mysqli_query($koneksi1, "UPDATE `daftar_menu` SET `stok` = '$stok_baru' WHERE `id` = '$id'");
header("Location: daftar-menu.php");
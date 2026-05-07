<?php
$id = $_GET["id"];
include "koneksi1.php";
mysqli_query($koneksi1,"DELETE FROM `daftar_menu` WHERE `id` = '$id'");

header("Location: daftar-menu.php");
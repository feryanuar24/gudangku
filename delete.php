<?php

//mememanggil database menggunakan file config
include_once("config.php");
 
//membuat variabel get
$id = $_GET['id'];
 
//membuat variabel query hapus data
$result = mysqli_query($mysqli, "DELETE FROM barang_masuk WHERE id=$id");
 
//merefresh halaman setelah delete
header("Location:index.php");
?>
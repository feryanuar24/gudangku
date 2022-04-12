<?php

//membuat koneksi database menggunakan "mysqli_connect" 
$databaseHost = 'localhost';
$databaseName = 'gudang';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
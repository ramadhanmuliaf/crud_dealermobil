<?php

$server = "localhost";
$user = "root";
$password = "12345";
$nama_database = "dealer_mobil";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

?>
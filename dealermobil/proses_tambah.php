<?php

include("config.php");

if(isset($_POST['tambah'])){

    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $kondisi = $_POST['kondisi'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO mobil (merk, tipe, warna, kondisi, harga) 
    VALUE ('$merk', '$tipe', '$warna', '$kondisi', '$harga')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list_mobil.php?status=sukses');
    } else {
        header('Location: list_mobil.php?status=gagal');
    }


} else {
    die("Akses Tidak Bisa");
}

?>
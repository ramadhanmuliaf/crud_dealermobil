<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id_mobil = $_POST['id_mobil'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $kondisi = $_POST['kondisi'];
    $harga = $_POST['harga'];

    $sql = "UPDATE mobil SET merk='$merk', tipe='$tipe', warna='$warna', kondisi='$kondisi', harga='$harga' WHERE id_mobil=$id_mobil";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list_mobil.php');
    } else {
        die("Gagal Mengubah Data");
    }


} else {
    die("Akses Tidak Bisa");
}

?>
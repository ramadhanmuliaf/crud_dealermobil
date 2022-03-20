<?php

include("config.php");

if(isset($_GET['id_mobil']) ){

    $id_mobil = $_GET['id_mobil'];

    $sql = "DELETE FROM mobil WHERE id_mobil=$id_mobil";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list_mobil.php');
    } else {
        die("Gagal Menghapus Data");
    }

} else {
    die("Akses Tidak Bisa");
}

?>
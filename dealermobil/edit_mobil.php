<?php

include("config.php");

if( !isset($_GET['id_mobil']) ){
    header('Location: list_mobil.php');
}

$id_mobil = $_GET['id_mobil'];

$sql = "SELECT * FROM mobil WHERE id_mobil=$id_mobil";
$query = mysqli_query($db, $sql);
$mobil = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data Tidak Ditemukan");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Dealer Mobil Ramadhan || Edit Data Mobil</title>
    <style>
    body {
        font-family: arial;
        background-color: #EEEEEE;
        margin: 0;
    }

    header {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #548CA8;
    }

    h3 {
        margin-left: 10px;
        color: white;
        text-align: center;
    }

    .container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 25px;
        width: 300px;
        border-radius: 20px;
        background-color: #548CA8;
        margin-top: 30px;
    }

    .button1 {
        background-color: #476072;
        width: 290px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 4px;
        border-radius: 20px;
        cursor: pointer;
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    p {
        color: white;
    }
    </style>
</head>

<body>
    <header>
        <h3>Form Edit Data Mobil</h3>
    </header>

    <div class="container">
        <form action="proses_edit.php" method="POST">

            <input type="hidden" name="id_mobil" value="<?php echo $mobil['id_mobil'] ?>" />

            <p>
                <label for="merk">Merk : </label>
                <input type="text" name="merk" value="<?php echo $mobil['merk'] ?>" />
            </p>
            <p>
                <label for="tipe">Tipe : </label>
                <input type="text" name="tipe" value="<?php echo $mobil['tipe'] ?>" />
            </p>
            <p>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" value="<?php echo $mobil['warna'] ?>" />
            </p>
            <p>
                <label for="kondisi">Kondisi : </label>
                <?php $kondisi = $mobil['kondisi']; ?>
                <select name="kondisi">
                    <option <?php echo ($kondisi == 'Baru') ? "selected": "" ?>>Baru</option>
                    <option <?php echo ($kondisi == 'Bekas') ? "selected": "" ?>>Bekas</option>
                </select>
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" value="<?php echo $mobil['harga'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" class="button1" name="simpan" />
            </p>
        </form>
    </div>
</body>

</html>
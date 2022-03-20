<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Dealer Mobil Ramadhan || List Mobil</title>
    <style>
    body {
        font-family: arial;
        background-color: #EEEEEE;
        margin: 0;
    }

    .button1 {
        background-color: #476072;
        width: 160px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 20px;
        cursor: pointer;
        margin-top: 10px;
    }

    table {
        width: 500px;
        border-collapse: 1px;
        border: 3px solid;
        padding: 8px;
        width: 70%;
        margin: 10px auto 10px auto;
    }

    nav {
        text-align: center;
    }

    p {
        text-align: center;
    }

    table, th, td {
        border: none;
    }

    th {
        background-color: #334257;
        color: white;
    }

    tr {
        background-color: #548CA8;
        color: white
    }

    a {
        text-decoration: none;
        color: white;
    }

    header {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #548CA8;
    }

    h3{
        margin-left: 10px;
        color: white;
        text-align: center;
    }
    </style>
</head>

<body>
    <header>
        <h3>List Mobil yang Tersedia</h3>
    </header>

    <nav>
        <a href="tambah_mobil.php"><input type="submit" class="button1" value="[+] Tambah Mobil"></a>
    </nav>

    <br>

    <table border="">
        <thead>
            <tr>
                <th>Id</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Warna</th>
                <th>Kondisi</th>
                <th>Harga</th>
                <th>Edit Data</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $sql = "SELECT * FROM mobil";
        $query = mysqli_query($db, $sql);

        while($mobil = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mobil['id_mobil']."</td>";
            echo "<td>".$mobil['merk']."</td>";
            echo "<td>".$mobil['tipe']."</td>";
            echo "<td>".$mobil['warna']."</td>";
            echo "<td>".$mobil['kondisi']."</td>";
            echo "<td>".$mobil['harga']."</td>";

            echo "<td>";
            echo "<a href='edit_mobil.php?id_mobil=".$mobil['id_mobil']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_mobil=".$mobil['id_mobil']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

        </tbody>
    </table>

    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>
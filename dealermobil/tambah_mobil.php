<!DOCTYPE html>
<html>

<head>
    <title>Dealer Mobil Ramadhan || Tambah Mobil</title>
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

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    p{
        color: white;
    }
    </style>
</head>

<body>
    <header>
        <h3>Form Penambahan Mobil</h3>
    </header>

    <div class="container">
        <form action="proses_tambah.php" method="POST">
            <p>
                <label for="merk">Merk : </label>
                <input type="text" name="merk" placeholder="merk mobil" />
            </p>
            <p>
                <label for="tipe">Tipe : </label>
                <input type="text" name="tipe" placeholder="tipe mobil" />
            </p>
            <p>
                <label for="warna">Warna : </label>
                <input type="text" name="warna" placeholder="warna mobil" />
            </p>
            <p>
                <label for="kondisi">Kondisi Mobil: </label>
                <select name="kondisi">
                    <option>Baru</option>
                    <option>Bekas</option>
                </select>
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" placeholder="harga" />
            </p>
            <p>
                <input type="submit" value="Tambahkan" class="button1" name="tambah" />
            </p>
        </form>
    </div>
</body>

</html>
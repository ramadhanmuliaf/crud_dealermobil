<!DOCTYPE html>
<html>

<head>
    <title>Dealer Mobil Ramadhan</title>
    <style>
    body {
        font-family: arial;
        background-color: #EEEEEE;
        margin: 0;
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
    }

    .container h2 {
        text-align: center;
        color: #fafafa;
        margin-bottom: 30px;
        text-transform: uppercase;
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

    .button2 {
        background-color: #476072;
        width: 290px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 20px;
        margin-left: 4px;
        border-radius: 20px;
        cursor: pointer;
    }
    p{
        text-align: center;
        color: #fafafa;
        margin-top: -30px;
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Menu</h2>
        <p>Dealer Mobil</p>
        <a href="tambah_mobil.php"><input type="submit" class="button1" value="Tambah Mobil"></a>
        <a href="list_mobil.php"><input type="submit" class="button2" value="Daftar Mobil"></a>
    </div>
</body>

</html>
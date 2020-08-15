<?php
    require 'koneksi.php';
    $data='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
</head>
<body>
    <h1>Halaman Masuk Pelanggan</h1>
    <form action="proses_masuk.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Masuk</button></td>
        </tr>
    
    </table>
    </form>
    <br>
    <br>
    <a href="pelanggan_tambah.php"><button><b> Daftar Pelanggan</b></button></a>
</body>
</html>
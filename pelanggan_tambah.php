<?php
    require 'koneksi.php';
    $data='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Halaman Register Pelanggan</h1>
    <form action="prosestamba_pelanggan.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <br>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="number" name="no_hp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Simpan</button></td>
        </tr>
    
    </table>
    </form>
    <br>
    <br>
    <a href="pelanggan_tampil.php"><button><b> Daftar Pelanggan</b></button></a>
    <a href="form_masuk.php"><button><b> Masuk Pelanggan</b></button></a>
</body>
</html>
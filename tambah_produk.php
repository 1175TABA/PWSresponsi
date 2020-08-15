<?php
    require 'koneksi.php';
    $data='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Halaman Tambah Produk</h1>
    <form action="prosestamba_produk.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="nama_produk"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>stock</td>
            <td>:</td>
            <td><input type="number" name="stock"></td>
        </tr>
        <tr>
            <td>gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button>Save Product</button></td>
        </tr>
    
    </table>
    </form>

</body>
</html>
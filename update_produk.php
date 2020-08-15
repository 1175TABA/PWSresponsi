<?php
    require 'koneksi.php';
    $data='';

    $id = $_GET["id"];
    $getData = $koneksi -> query ("SELECT * FROM produk WHERE id_produk =".$id);
    if ($getData->num_rows==0){
        header("location: tampil_produk.php");
        exit();
    }

    $getData = $getData->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
</head>
<body>
    <h1>Halaman Update Produk</h1>
    <form action="prosesupdate_produk.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="nama_produk" value="<?=$getData["nama_produk"]?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="harga" value="<?=$getData["harga"]?>"></td>
        </tr>
        <tr>
            <td>stock</td>
            <td>:</td>
            <td><input type="number" name="stock" value="<?=$getData["stock"]?>"></td>
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
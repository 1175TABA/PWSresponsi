<?php
    require 'koneksi.php';
    $data='';

    $id = $_GET["id"];
    $getData = $koneksi -> query ("SELECT * FROM pelanggan WHERE id_pelanggan =".$id);
    if ($getData->num_rows==0){
        header("location: pelanggan_tampil.php");
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
    <h1>Halaman Update Pelanggan</h1>
    <form action="prosesupdate_pelanggan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?=$getData["nama"]?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?=$getData["alamat"]?>"></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td><input type="number" name="no_hp" value="<?=$getData["no_hp"]?>"></td>
        </tr>
        <tr>
            <td>email</td>
            <td>:</td>
            <td><input type="email" name="email" value="<?=$getData["email"]?>"></td>
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
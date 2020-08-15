<?php
    session_start();
    require 'koneksi.php';
 
    $cart=mysqli_query($koneksi, "SELECT produk.id_produk,produk.nama_produk,produk.harga,produk.stock,produk.gambar FROM produk INNER JOIN pesan ON produk.id_produk=pesan.id_produk order by produk.id_produk DESC");
    $a =   mysqli_query($koneksi, "SELECT * FROM pelanggan");
    $result =   mysqli_query($koneksi, "SELECT * FROM pesan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Bayar</title>
</head>
<body>
    <h1>Halaman Akhir Pemesanan</h1>
    <form action="prosesupdate_pelanggan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <table border="1">
            <tr>
                <td>Id Pesan</td>
                <td>Nama Pelanggan</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Jumlah Pesan</td>
                <td>Total Bayar</td>
                <td>Aksi</td>

            </tr>
            <?php while ($b = mysqli_fetch_array($a)) {
            ?>
            <?php while ($data = mysqli_fetch_array($result)) {
            ?>
            <?php

                $total = 0;
            	while ($keranjang = mysqli_fetch_array($cart)) {
                $total+=floatval($keranjang ['harga']);
            ?>
            <tr>
                <td><?php echo $data  ['id_pesan'];?></td>
                <td><?php echo $b ['nama'];?></td>
                <td><?php echo $keranjang ['nama_produk'];?></td>
                <td>Rp. <?php echo $keranjang ['harga'];?></td>
                <td><?php echo $data ['jumlah_pesan'];?></td>
                <td><label><b> Total: </b> Rp. <?php echo $total; ?></label></td>
                <td>
                    <a href="hapus_pesan.php?id=<?php echo $data['tampil_pesan'];?>"><button>Delete</button></a>
                    <a href="tampil_pesan.php?id=<?php echo $data['id_produk']; ?> "><button>Update</button></a>
            </tr>
            <tr>
                </td>
            </tr>
            <?php }?>
            <?php }?>
            <?php }?>
            <label><b> Total: </b> Rp. <?phpecho $total+floatval($keranjang['harga']); ?>
            </label>
            <td></td>
            <td></td>
            <td></td>      
            </table>

            <br>
            <br>
    </form>
</body>
</html>
<?php
    session_start();
    require 'koneksi.php';
    $cart=mysqli_query($koneksi, "SELECT produk.id_produk,produk.nama_produk,produk.harga,produk.stock,produk.gambar FROM produk INNER JOIN pesan ON produk.id_produk=pesan.id_produk order by produk.id_produk DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
</head>
<body>
    <h1>Halaman Input Pesan</h1>
    <form action="prosesupdate_pelanggan.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <table border="1">
            <tr>
                <td>Id</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Aksi</td>
                <td>Stock</td>
                <td>Masukkan Jumlah</td>

            </tr>
            <?php
                $total = 0;
            	while ($keranjang = mysqli_fetch_array($cart)) {
                $total+=floatval($keranjang ['harga']);
            ?>
            <tr>
                <td><?php echo $keranjang  ['id_produk'];?></td>
                <td><?php echo $keranjang ['nama_produk'];?></td>
                <td>Rp. <?php echo $keranjang ['harga'];?></td>
                <td><a href="hapus_pesan.php?id=<?php echo $keranjang['id_pesan']; ?>"><button>Delete</button></a></td>
                <td><?php echo $keranjang ['stock'];?></td>
                <td><input type="number" name="masukkan_jumlah" value="<?=$_GET['masukkan_jumlah']?>"></td>
                
            </tr>
            <tr>
                </td>
            </tr>
            <?php }?>
            </table>
            <label><b> Total: </b> Rp. <?php echo $total; ?></label>
            <br>
            <br>
    </form>
    <a href="gambar_produk.php"><button><b> Tambah Pesan</b></button></a>
    <br>
    <br>
    <a href="jumlah_pesan.php"><button><b> Bayar</b></button></a>

</body>
</html>
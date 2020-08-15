<?php
    require 'koneksi.php';
    $result =   mysqli_query($koneksi, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Produk</title>
</head>
<body>
    <h1>HALAMAN PRODUK</h1>
        <a href="tambah_Produk.php"><button><b>Tambah Produk</b></button></a>  &nbsp;
        <a href="gambar_produk.php"><button><b> PESAN</b></button></a>
        <br>
        <br>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Stock</td>
                <td>Aksi</td>
            </tr>
            <?php
            	while ($data = mysqli_fetch_array($result)) {

            ?>
            <tr>
                <td><?php echo $data  ['id_produk'];?></td>
                <td><?php echo $data ['nama_produk'];?></td>
                <td><?php echo $data ['harga'];?></td>
                <td><?php echo $data ['stock'];?></td>
                <td>
                    <a href="update_produk.php?id=<?php echo $data['id_produk']; ?>"><button>Update</button></a>&nbsp;
                    <a href="hapus_produk.php?id=<?php echo $data['id_produk']; ?> "><button>Delete</button></a>
                </td>
            </tr>
            <?php
                }
            ?>
            </table>
            <br>
            <br>
</body>
</html>
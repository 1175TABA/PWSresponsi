<?php
    require 'koneksi.php';
    $result =   mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Produk</title>
</head>
<body>
<h1>HALAMAN PELANGGAN</h1>
        <br>
        <br>
        <table border="1">
            <tr>
                <td>Id Pelanggan</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Nomor Hp</td>
                <td>Email</td>
                <td>Aksi</td>
            </tr>
            <?php
            	while ($data = mysqli_fetch_array($result)) {

            ?>
            <tr>
                <td><?php echo $data  ['id_pelanggan'];?></td>
                <td><?php echo $data ['nama'];?></td>
                <td><?php echo $data ['alamat'];?></td>
                <td><?php echo $data ['no_hp'];?></td>
                <td><?php echo $data ['email'];?></td>
                <td>
                    <a href="pelanggan_update.php?id=<?php echo $data['id_pelanggan']; ?>"><button>Update</button></a>&nbsp;
                    <a href="pelanggan_delete.php?id=<?php echo $data['id_pelanggan']; ?> "><button>Delete</button></a>
                </td>
            </tr>
            <?php
                }
            ?>
            </table>
                <br>
                <br>
            <a href="tampil_produk.php"><button><b> produk</b></button></a>

</body>
</html>
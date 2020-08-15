<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melihat Gambar</title>
</head>
<body>
    <br>
    <br>
    <a href="tampil_produk.php"><button><b> Kembali</b></button></a> &nbsp; &nbsp; &nbsp;
    <a href="pelanggan_tampil.php?id=<?php echo $_SESSION['id_pelanggan'];?>"><button><b> Edit Profil</b></button></a> &nbsp; &nbsp; &nbsp;
    <a href="tampil_pesan.php"><button><b> List Pesanan</b></button></a>

    <h1>Melihat Gambar</h1>
    <?php
    if ($_SESSION['id_pelanggan'] && $_SESSION['nama'] != null){
        echo "<b>SELAMAT DATANG:         </b>".$_SESSION['nama'];
    }else{
        echo '<script language="javascript">';
        echo 'alert("Masuk gagal, Silahkan masuk/daftar pelanggan");';
        echo 'window.location = "pelanggan_tambah.php"';
        echo '</script>';
    }
    ?>
    <br>
    <br>
    <?php
        require 'koneksi.php';
        $data = $koneksi -> query("SELECT *FROM produk");
        while($fetchProduct = $data-> fetch_assoc()){
    ?>
    <table style="display:inline-table;width:200px">
        <tr>
            <td><img style="width:100%" src="<?=$fetchProduct["gambar"]?>"></td>
        </tr>
        <tr>
            <td>
                <strong><?=$fetchProduct["nama_produk"]?></strong><br/>
                RP <?=number_format ($fetchProduct["harga"])?>
                <br><strong>Stock <?=$fetchProduct["stock"]?></strong><br/>
            </td>
        </tr>
        <tr>
            <td>
            <a href="input_pesan.php?id=<?=$fetchProduct ['id_produk']; ?>"><button>Tambah Pesanan</button></a>
            </td>
        </tr>
</table>
<?php
        }
?>
</body>
</html>
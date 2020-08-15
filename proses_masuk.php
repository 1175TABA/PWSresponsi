<?php
if(isset($_POST['nama'])){
    require 'koneksi.php';
    $nama = $_POST["nama"];
    $result =   $koneksi -> query("SELECT * FROM pelanggan WHERE nama='".$nama."'");
    $check=mysqli_num_rows($result);
		if ($check > 0) {
			$data=mysqli_fetch_array($result);
            session_start();
            $_SESSION['id_pelanggan']=$data['id_pelanggan'];
            $_SESSION['nama']=$data['nama'];
			header("location:gambar_produk.php");
		}else{
            session_start() ;
            session_destroy() ;
            echo '<script language="javascript">';
            echo 'alert("Nama Pelanggan Tidak Ditemukan");';
            echo 'window.location = "pelanggan_tambah.php"';
            echo '</script>';
        }
}
?>
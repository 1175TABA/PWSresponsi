<?php
    session_start();
    require 'koneksi.php';
    $query=mysqli_query($koneksi, "select * from produk where id_produk=".$_GET['id']);
    $data=mysqli_fetch_array($query);
    $total_bayar=$data["harga"]*1;
    $nama_barang=$data["nama_produk"];
    $harga=$data["harga"];
    $tkeranjang=mysqli_query($koneksi, 'INSERT INTO pesan SET id_pelanggan='.$_SESSION['id_pelanggan'].',id_produk='.$_GET['id'].',jumlah_pesan=1,total_bayar='.$total_bayar.'');
    header("location:tampil_pesan.php");
?>
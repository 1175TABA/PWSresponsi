<?php

    if(isset($_POST['nama_produk'])){
        require 'koneksi.php';
        // $id                     =$_POST["id_produk"];
        $id_produk              =$_POST["id"];
        $nama_produk            =$_POST["nama_produk"];
        $harga                  =$_POST["harga"];
        $stock                  =$_POST["stock"];
        $gambar                 =$_FILES ["gambar"];



        $filepath = "upload/".basename($gambar['name']);
        move_uploaded_file($gambar['name'], $filepath);

            
        
        $koneksi->query("UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stock='$stock', gambar='$filepath' WHERE id_produk='$id_produk'");

    }
        header("location: tampil_produk.php");
    

?>
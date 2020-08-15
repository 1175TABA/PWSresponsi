<?php

    if(isset($_POST['nama_produk'])){
        require 'koneksi.php';

        $nama_produk            =$_POST["nama_produk"];
        $harga                  =$_POST["harga"];
        $stock                  =$_POST["stock"];
        $gambar                 =$_FILES ["gambar"];

            $filePath   = "upload/".basename($gambar["name"]);
            move_uploaded_file($gambar["tmp_name"], $filePath);


            $koneksi->query("INSERT INTO produk VALUES (null,'".$nama_produk."' ,'".$harga."' ,'".$stock."' ,'".$filePath."')");            
            // var_dump("INSERT INTO produk VALUES (null,'".$nama_produk."' ,'".$harga."' ,'".$stock."' ,'".$filePath."')");            
        }

        header("location: tampil_produk.php");
    

?>
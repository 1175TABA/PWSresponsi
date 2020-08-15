<?php

    if(isset($_POST['nama'])){
        require 'koneksi.php';

        $nama                   =$_POST["nama"];
        $alamat                 =$_POST["alamat"];
        $no_hp                  =$_POST["no_hp"];
        $email                  =$_POST ["email"];

            $koneksi->query("INSERT INTO pelanggan VALUES (null,'".$nama."' ,'".$alamat."' ,'".$no_hp."' ,'".$email."')");            
        }

        header("location: pelanggan_tampil.php");
    

?>
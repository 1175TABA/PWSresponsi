<?php

    if(isset($_POST['nama'])){
        require 'koneksi.php';
        $id_pelanggan           =$_POST["id"];
        $nama                   =$_POST["nama"];
        $alamat                 =$_POST["alamat"];
        $no_hp                  =$_POST["no_hp"];
        $email                  =$_POST ["email"];

        $koneksi->query("UPDATE pelanggan SET nama='$nama', alamat='$alamat', no_hp='$no_hp', email='$email' WHERE id_pelanggan='$id_pelanggan'");
        // var_dump("UPDATE pelanggan SET nama='$nama', alamat='$alamat', no_hp='$no_hp', email='$email' WHERE id_pelanggan='$id_pelanggan'");
    }
        header("location: pelanggan_tampil.php");
    

?>
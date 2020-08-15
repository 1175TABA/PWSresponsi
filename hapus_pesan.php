<?php

    if(isset($_GET['id_pesan'])){
        require 'koneksi.php';

        $koneksi ->query("DELETE FROM pesan WHERE id_pesan =".$_GET["id_pesan"]);
        // var_dump("DELETE FROM produk WHERE id_produk = ".$_GET["id"]);
    }
    header("location: tampil_produk.php");
    ?>
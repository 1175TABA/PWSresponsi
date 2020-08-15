<?php

    if(isset($_GET['id'])){
        require 'koneksi.php';

        $koneksi ->query("DELETE FROM produk WHERE id_produk =".$_GET["id"]);
        // var_dump("DELETE FROM produk WHERE id_produk = ".$_GET["id"]);
    }
    header("location: tampil_produk.php");
    ?>
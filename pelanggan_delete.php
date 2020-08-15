<?php

    if(isset($_GET['id'])){
        require 'koneksi.php';

        $koneksi ->query("DELETE FROM pelanggan WHERE id_pelanggan =".$_GET["id"]);

    }
    header("location: pelanggan_tampil.php");
    ?>
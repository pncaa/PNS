<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pns_data");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>
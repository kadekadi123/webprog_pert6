<?php
    /**
    *Membuat koneksi
    * 1. menyiapkan lokasi server, user name dan password
    * 2. test koneksi
    */

    include_once("konfigurasi.php");
    
    $cnn - mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("koneksi ke DBMS ke mysql gagal<br>");
    echo "koneksi ke DBMS Mysql Sukses <br>";
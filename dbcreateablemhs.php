<?php
/**
 * membuat tabel:
 * 1. koneksi server database dan membuka database
 * 2. script sql create tabel
 * tabel: mhs
 * field: NIM varchar(8), NAMA varchar(30), Jurusan varchar(20), JK enum, TGLLAHIR date, PASSCODE varchar(10)
 * 3. execute script point 2
 * 4. close connection
 */ 

 include_once("dbkoneksi2.php");
$sql = "CREATE TABLE mhs(
    NIM varchar(8) PRIMARY KEY,
    NAMA varchar(30),
    JUrusan varchar(20),
    JK varchar(1)
    TGLLAHIR date,
    PASSCODE varchar(10)
);";

$hsl - mysqli_query($cnn, $sql);

if($hsl){
    echo "Pembuatan tabel mhs sukses<br>";    
}else{
    echo "Pembuatan tabel mhs Gagal<br>";
}

mysqli_query($cnn);
 
 
<?php
/**
 * Menambahkan data ke tabel mhs
 * 1. buat koneksi
 * 2. buat script sql untuk insert data ke tabel mhs 
 * NIM, NAMA, Jurusan, tgl lahir, jk, passcode
 * 3. execute point 2
 * 4. cek status
 * 5. close connection
 */ 

if(isset($_POST["txNIM"])){
    include_once("dbkoneksi2.php");

    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $talag = $_POST["txTALAG"];
    $jk = $_POST["txJK"];
    $jur = $_POST["txJUR"];
    $pass = $_POST["txPASS"];

    $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGL LAHIR, PASSCODE) VALUES
    ('".$nim."','".$nama."','".$talag."','".$jk."','".$jur."','".$pass."');";

}




$sqlINSERT - "INSERT INTO mhs(NIM,NAMA,JURUSAN,JK,TGLLAHIR,PASSCODE) VALUES
('12345678', 'Jordi','MTI','L','2003-7-16,'asdf'),
('12345678', 'Dio','MTI','L','2008-9-22,'12345');";

$hsl = mysqli_query($cnn, $sqlINSERT);

if($hsl){
    echo "Insert data sukses<br>"
}else{
    echo "Insert data gagal"
}
mysqli_close($cnn);
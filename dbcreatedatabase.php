<?php
/** 
*membuat koneksi
* 1. koneksi ke DBMS Mysql
* 2. script SQL untuk create database
*3. execute scrpit tersebut
*/ 

include_once("dbkoneksi.php");
if($cnn){
    $sql - "CREATE DATABASE mahasiswa";

    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Database mahasiswa <i>suskes</i> dibuat<br>";
    }else{
        echo "Database mahasiswa <i>gagal</i> dibuat<br>";
    }
    mysqli_close($cnn);
}
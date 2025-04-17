<?php
$host = "localhost"; //server yang digunakan
$username = "root"; //username database
$password = ""; //password database
$dbname = "photo_db"; //nama database

//Koneksi ke database 
$conn = new mysqli($host, $username, $password, $dbname);

//cek apakah terjadi kesalahan koneksi 
if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
?>
<?php

$host="localhost";
$user="id21685392_admin123";
$password="Radot251003.";
$db="id21685392_admin123";

$connect = mysqli_connect($host,$user,$password,$db);
if (!$connect){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>
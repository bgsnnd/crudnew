<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "crudnew";

$koneksi = mysqli_connect($server, $user, $password, $database);

if(!$koneksi){
    die("Gagal Terhubung".mysqli_connect_error());
}


?>


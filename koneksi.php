<?php 
// Koneksi ke server mysql 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($server, $username, $password, $database) OR DIE("Koneksi Gagal");
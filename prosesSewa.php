<?php 
    include_once 'koneksi.php';

    $judul = $_POST['judul'];
    $nama = $_POST['nama'];
    $durasi = $_POST['durasi'];

    $tanggal_sewa = date('Y-m-d');

    mysqli_query($connect, "INSERT INTO sewa(judul,nama,durasi,tanggal_sewa) VALUES ('$judul', '$nama', '$durasi', '$tanggal_sewa')");

    header('Location:index.php');
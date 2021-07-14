<?php 

    include_once 'koneksi.php';

    $id = $_GET['id'];

    $judul = $_POST['judul'];
    $penyewa = $_POST['nama'];
    $durasi = $_POST['durasi'];

    $tanggal_sewa = date('Y-m-d');

    $query = mysqli_query($connect, "UPDATE sewa SET judul = '$judul',
                                            nama = '$penyewa',
                                            durasi = '$durasi'
                                            WHERE id='$id'");
   

    header('location:index.php');
<?php

    include_once 'koneksi.php';

    $id = $_GET['id'];


   $query = mysqli_query($connect, "DELETE FROM sewa WHERE id ='$id'");

    if(empty($query)) {
        echo "Data Gagal DiHapus";
    } else {
        header("location:index.php");
    }

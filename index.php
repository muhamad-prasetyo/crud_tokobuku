<?php 
    
    include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Sewa</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Penyewa</th>
            <th>Tanggal Sewa</th>
            <th>Durasi</th>
            <th>Action</th>
        </tr>

        <?php
            $query = mysqli_query($connect, "SELECT * FROM sewa");
        ?>
    </table>
</body>
</html>
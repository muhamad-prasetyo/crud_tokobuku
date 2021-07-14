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
    <div>
        <a href="formSewa.php">Tambah Data</a>
    </div>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Penyewa</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Selesai</th>
            <th>Durasi</th>
            <th>Action</th>
        </tr>

        <?php
            $query = mysqli_query($connect, "SELECT * FROM sewa");

            $no =1;
            while($row = mysqli_fetch_array($query)) 
            {
                $tanggal_selesai = date('Y-m-d', strtotime($row['tanggal_sewa'] . " + $row[durasi] days"));

                echo"<tr>";
                echo "<td>$no</td>";
                echo "<td>$row[judul]</td>";
                echo "<td>$row[nama]</td>";
                echo "<td>$row[tanggal_sewa]</td>";
                echo "<td>$tanggal_selesai</td>";
                echo "<td>$row[durasi]<td>";
                echo "<td> &nbsp; </td>";


                $no++;
                echo "<td><a href='formEditSewa.php'>Edit</a></td>";
            }

        ?>

    </table>
</body>
</html>
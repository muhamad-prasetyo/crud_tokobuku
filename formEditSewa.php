<?php 
    include_once 'koneksi.php';

    $id = $_GET['id'];

    $query = mysqli_query($connect, "SELECT * FROM sewa WHERE id='$id'");

    $row = mysqli_fetch_array($query);

    var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sewa</title>
</head>
<body>
    <form action="prosesEditSewa.php?id=<?= $row['id']; ?>" method="POST">
        
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" value="<?= $row['judul']; ?>">

        <label for="nama">Nama Penyewa</label>
        <input type="text" name="nama" value="<?= $row['nama']; ?>">

        <label for="durasi">Durasi Sewa</label>
        <input type="text" name="durasi" value="<?= $row['durasi']; ?>">

        <br><br>
        <div>
            <input type="submit" name="sewa" value="Sewa Buku">
        </div>
    </form>
</body>
</html>
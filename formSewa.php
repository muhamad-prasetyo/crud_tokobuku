<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sewa</title>
</head>
<body>
    <form action="prosesSewa.php" method="POST">
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul">

        <label for="nama">Nama Penyewa</label>
        <input type="text" name="nama">

        <label for="durasi">Durasi Sewa</label>
        <input type="text" name="durasi">

        <br><br>
        <div>
            <input type="submit" name="sewa" value="Sewa Buku">
        </div>
    </form>
</body>
</html>

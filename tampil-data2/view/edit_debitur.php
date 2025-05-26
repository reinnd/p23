<?php

include ("../controllers/c_conn.php");

$id =$_GET['id'];

try {

    $query = $conn->query("SELECT * FROM nasabah WHERE id_nasabah = $id");
    $result = $query-> fetch_all(MYSQLI_ASSOC);


} catch (exception $e) {
    echo "TS SO ASS 🥀💔: " . e->getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="../models/update.php" method="post">

    <?php foreach ($result as $data) :   ?>
        <label for="id"></label><br>
        <input type="number" name="id" hidden><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama_lengkap'] ?>" ><br><br>

        <label for="tl">Tanggal Lahir</label><br>
        <input type="date" name="tl" value="<?= $data['tanggal_lahir'] ?> "><br><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>"><br><br>
        
        <label for="telp">No Telp</label><br>
        <input type="text" name="telp" value="<?= $data['nomor_telepon'] ?>"><br><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email" value="<?= $data['email'] ?>"><br><br>

        <label for="nid">No Identitas</label><br>
        <input type="number" name="nid" value="<?= $data['nomor_identitas'] ?>"><br><br>

        <label for="tdf">Tanggal Daftar</label><br>
        <input type="date" name="tdf" value="<?= $data['tanggal_daftar'] ?>"><br><br>

        <input type="submit" value="kirim">
    <?php endforeach ?>

    </form>
</body>
</html>
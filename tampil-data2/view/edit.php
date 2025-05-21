<?php

include ("../controllers/c_conn.php");

$id =$_GET['id'];

try {

    $query = $conn->query("SELECT * FROM tamu WHERE IDtamu = $id");
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
        <label for="IDtamu"></label><br>
        <input type="number" name="IDtamu" value="<?= $data['IDtamu']; ?>" hidden><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama'];?>"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" value="<?= $data['email'];?>"><br>

        <label for="telp">No Telp</label><br>
        <input type="text" name="telp" value="<?= $data['phone'];?>"><br><br>

        <input type="submit" value="kirim">
    <?php endforeach ?>

    </form>
</body>
</html>
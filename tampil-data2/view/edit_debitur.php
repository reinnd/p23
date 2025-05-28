<?php

include ("../controllers/c_conn.php");

$id =$_GET['id'];

try {

    $query = $conn->query("SELECT * FROM debitur WHERE id_debitur = $id");
    $result = $query-> fetch_all(MYSQLI_ASSOC);


} catch (exception $e) {
    echo "TS SO ASS 🥀💔: " . $e->getMessage();
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
    <form action="../models/m_update_debitur.php" method="post">

    <?php foreach ($result as $data) :   ?>
        <label for="id"></label><br>
        <input type="number" name="id" hidden><br>
        
        <label for="id_n">nama nasabah</label><br>
        <input type="number" name="id_n" value="<?= $data['id_nasabah'] ?>"><br>

        <label for="jenpin">Jenis Pinjaman</label><br>
        <input type="text" name="jenpin" value="<?= $data['jenis_pinjaman'] ?>"><br><br>

        <label for="jumpin">Jumlah Pinjaman</label><br>
        <input type="text" name="jumpin" value="<?= $data['jumlah_pinjaman'] ?>"><br><br>

        <label for="tp">Tanggal Pengajuan</label><br>
        <input type="date" name="tp" value="<?= $data['tanggal_pengajuan'] ?>"><br><br>
        
        <label for="tjt">Tanggal Jatuh Tempo</label><br>
        <input type="date" name="tjt" value="<?= $data['tanggal_jatuh_tempo'] ?>"><br><br>
        
        <label for="bunga">Suku Bunga</label><br>
        <input type="text" name="bunga" value="<?= $data['suku_bunga'] ?>"><br><br>

        <label for="status">Status pinjaman</label><br>
        <input type="text" name="status" value="<?= $data['status_pinjaman'] ?>"><br><br>

        <input type="submit" value="kirim">
    <?php endforeach ?>

    </form>
</body>
</html>
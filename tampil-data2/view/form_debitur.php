<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="../models/m_tambah_debitur.php" method="post">

        <label for="id"></label><br>
        <input type="number" name="id" hidden><br>
        
        <label for="id_n">nama nasabah</label><br>
        <input type="number" name="id_n"><br>

        <label for="jenpin">Jenis Pinjaman</label><br>
        <input type="text" name="jenpin"><br><br>

        <label for="jumpin">Jumlah Pinjaman</label><br>
        <input type="text" name="jumpin"><br><br>

        <label for="tp">Tanggal Pengajuan</label><br>
        <input type="date" name="tp"><br><br>
        
        <label for="tjt">Tanggal Jatuh Tempo</label><br>
        <input type="date" name="tjt"><br><br>
        
        <label for="bunga">Suku Bunga</label><br>
        <input type="text" name="bunga"><br><br>

        <label for="status">Status pinjaman</label><br>
        <input type="text" name="status"><br><br>

        <input type="submit" value="kirim">

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="../models/m_tambah_nasabah.php" method="post">

        <label for="id"></label><br>
        <input type="number" name="id" hidden><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br><br>

        <label for="tl">Tanggal Lahir</label><br>
        <input type="date" name="tl"><br><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat"><br><br>

        <label for="telp">No Telp</label><br>
        <input type="text" name="telp"><br><br>
        
        <label for="email">Email</label><br>
        <input type="email" name="email"><br><br>
        
        <label for="nid">No Identitas</label><br>
        <input type="number" name="nid"><br><br>

        <label for="tdf">Tanggal Daftar</label><br>
        <input type="date" name="tdf"><br><br>

        <input type="submit" value="kirim">

    </form>
</body>
</html>
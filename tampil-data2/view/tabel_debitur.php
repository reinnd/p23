<?php

include "../controllers/c_conn.php";

$query = $conn->query("SELECT * FROM debitur");
$result = $query->fetch_all(MYSQLI_ASSOC);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <link rel="stylesheet" href="style/table.css?v=1.2">
    <link rel="stylesheet" href="style/nav.css?v=1.2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    </nav>
    <div class="tabel">
        <a href="form.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Pinjaman</th>
                <th>Jumlah Pinjaman</th>
                <th>Tanggal Pengajuan</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Suku bunga</th>
                <th>Status Pinjaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $no = 1;
            foreach ($result as $data): 
            

            ?>
            
            <tr>
                <td><?= $no++ ?></td>
                <td><?= "error 404" ?></td>
                <td><?= $data['jenis_pinjaman'] ?></td>
                <td><?= $data['jumlah_pinjaman'] ?></td>
                <td><?= $data['tanggal_pengajuan'] ?></td>
                <td><?= $data['tanggal_jatuh_tempo'] ?></td>
                <td><?= $data['suku_bunga'] ?></td>
                <td><?= $data['status_pinjaman'] ?></td>
                <td>
                    <a href="edit_debitur.php?id= <?= $data['id_debitur'] ?>" class="button-edit">edit</a>
                    <a href="../models/m_hapus_debitur.php?id= <?= $data['id_debitur'] ?>>hapus</a>
                </td>
            </tr>
        <?php
            endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>
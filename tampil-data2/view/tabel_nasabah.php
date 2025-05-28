<?php

include "../controllers/c_conn.php";

$query = $conn->query("SELECT * FROM nasabah");
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
        <a href="form_nasabah.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Lengkap</th>
                <th rowspan="2">Tanggal Lahir</th>
                <th rowspan="2">Alamat</th>
                <th colspan="2">Kontak</th>
                <th rowspan="2">No. Identitas</th>
                <th rowspan="2">Tanggal Daftar</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>no telepon</th>
                <th>email</th>
            </tr>

        </thead>
        <tbody>

        <?php

            $no = 1;
            foreach ($result as $data): 
            

            ?>
            
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nama_lengkap'] ?></td>
                <td><?= date( "d F Y" , strtotime($data['tanggal_lahir'])) ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['nomor_telepon'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['nomor_identitas'] ?></td>
                <td><?= $data['tanggal_daftar'] ?></td>
                <td>
                    <a href="edit_nasabah.php?id= <?= $data['id_nasabah'] ?>" class="button-edit">edit</a>
                    <a href="../models/m_hapus_nasabah.php?id= <?= $data['id_nasabah'] ?>" class="button-delete">hapus</a>
                </td>
            </tr>
        <?php
            endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>
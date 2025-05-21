<?php

include "../controllers/c_conn.php";

$query = $conn->query("SELECT * FROM guru");
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
                <th rowspan="2">No</th>
                <th rowspan="2">nama</th>
                <th colspan="2">kontak</th>
                <th rowspan="2">aksi</th>
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
                <td><?= $data['nama_guru'] ?></td>
                <td><?= $data['no_telp'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="m_edit.php?id=" class="button-edit">edit</a>
                    <a href="m_hapus.php?id=" class="button-delete">hapus</a>
                </td>
            </tr>
        <?php
            endforeach ?>
        </tbody>
    </table>
    </div>
</body>
</html>
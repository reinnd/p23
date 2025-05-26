<?php

include "../controllers/c_conn.php";

        $id = $_POST['id'];
        $id_n = $_POST['id_n'];
        $jenp = $_POST['jenpi'];
        $jump = $_POST['jumpi'];
        $tp = $_POST['tp'];
        $tjt = $_POST['tjt'];
        $bunga = $_POST['bunga'];
        $status = $_POST['status'];


try {

        $conn->query ("INSERT INTO debitur (id_debitur, id_nasabah, jenis_pinjaman, jumlah_pinjaman, tanggal_pengajuan, tanggal_jatuh_tempo, suku_bunga, status_pinjaman)
        VALUE ('$id', '$id_n' '$jenp', '$jump', '$tp', $tjt', '$bunga', '$status')");
        
        header ("location: ../view/tabel_nasabah.php");


} catch (exception $e)  {
    echo $e->getMessage();
}

?>
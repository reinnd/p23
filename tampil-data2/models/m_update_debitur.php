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

    $conn->query ("UPDATE debitur SET id_nasabah='$id_n',jenis_pinjaman='$jenp',jumlah_pinjaman='$jump',tanggal_pengajuan='$tp',tanggal_jatuh_tempo='$tjt',suku_bunga='$bunga',status_pinjaman='$status' WHERE id_debitur = $id");
        
        header ("location: ../view/tabel_debitur.php");

}catch (exception $e)  {
    echo "gak keupdate dongo: " . $e->getMessage();
}

?>
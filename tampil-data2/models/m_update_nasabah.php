<?php

include "../controllers/c_conn.php";

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tl'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $phone = $_POST['telp'];
        $no_identitas = $_POST['nid'];
        $tanggal_daftar = $_POST['tdf'];

try {

    $conn->query ("UPDATE nasabah SET nama_lengkap = '$nama', tanggal_lahir = '$tanggal_lahir' , alamat = '$alamat', nomor_telepon = '$phone' , email = '$email' , nomor_identita = '$no_identitas' , tanggal_daftar = '$tanggal_daftar' WHERE id_nasabah = $id");
        
        header ("location: ../view/tabel_nasabah.php");

}catch (exception $e)  {
    echo "gak keupdate dongo: " . $e->getMessage();
}

?>
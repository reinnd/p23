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

        $conn->query ("INSERT INTO nasabah (id_nasabah, nama_lengkap, tanggal_lahir, alamat, nomor_telepon, email, nomor_identitas, tanggal_daftar)
        VALUE ('$id', '$nama', '$tanggal_lahir', '$alamat', '$phone', '$email', '$no_identitas', '$tanggal_daftar')");
        
        header ("location: ../view/tabel_nasabah.php");


} catch (exception $e)  {
    echo $e->getMessage();
}

?>
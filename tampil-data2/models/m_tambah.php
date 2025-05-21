<?php

include "../controllers/c_conn.php";

        $id_guru = $_POST['id_guru'];
        $nama = $_POST['nama_guru'];
        $email = $_POST['email'];
        $phone = $_POST['telp'];


try {

        $conn->query ("INSERT INTO guru (id_guru, nama_guru, email, no_telp)
        VALUE ('$id_guru', '$nama', '$email', '$phone')");
        
        header ("location: ../view/form.php");


} catch (exception $e)  {
    echo $e->getMessage();
}

?>
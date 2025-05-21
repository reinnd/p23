<?php

include "../controllers/c_conn.php";

        $IDtamu = $_POST['IDtamu'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['telp'];

try {

    $conn->query ("UPDATE tamu SET nama = '$nama', email = '$email', phone = '$phone' WHERE IDtamu = $IDtamu");
        
        header ("location: table.php");

}catch (exception $e)  {
    echo "gak keupdate dongo: " . $e->getMessage();
}

?>
<?php

include ("../controllers/c_conn.php");

$id = $_GET['id'];

try {
    $conn->query ("DELETE FROM nasabah WHERE id_nasabah = $id");

    header ("location: ../view/tabel_nasabah.php");
    
} catch (exeption $e) {
    echo e->getMessage();
}

?>
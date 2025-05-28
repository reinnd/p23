<?php

include ("../controllers/c_conn.php");

$id = $_GET['id'];

try {
    $conn->query ("DELETE FROM debitur WHERE id_debitur = $id");

    header ("location: ../view/tabel_debitur.php");
    
} catch (exeption $e) {
    echo $e->getMessage();
}

?>
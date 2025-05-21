<?php

include ("../controllers/c_conn.php");

$id = $_GET['id'];

try {
    $conn->query ("DELETE FROM tamu WHERE IDtamu = $id");

    header ("location: table.php");
    
} catch (exeption $e) {
    echo e->getMessage();
}

?>
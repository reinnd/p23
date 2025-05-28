<?php

include "../controllers/c_conn.php";

$query = $conn->query("SELECT * FROM nasabah WHERE id_nasabah = 1");
$stmt = $query

$stmt->bind_param("i", id_nasabah);
$stmt->execute();
$result = $stmt->get_result();

$data = $result->fetch_all(MYSQLI_ASSOC);

var_dump($data);
// print_r($result);

?>
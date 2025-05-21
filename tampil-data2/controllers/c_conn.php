<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "data-sekolah";

$conn = new mysqli($host, $user, $pass, $database );

if ($conn->connect_error) {
    echo "e" . $conn->connect_error;
} else {
    echo "b";
}



?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "produkty_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Pripojenie zlyhalo: " . $conn->connect_error);
}
?>

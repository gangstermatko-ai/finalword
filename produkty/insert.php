<?php
include 'db.php';

$nazov = $_POST['nazov'];
$cena = $_POST['cena'];
$popis = $_POST['popis'];

$sql = "INSERT INTO produkty (nazov, cena, popis) VALUES ('$nazov', '$cena', '$popis')";
$conn->query($sql);

header("Location: index.php");
exit();
?>
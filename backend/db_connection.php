<?php
$host = "mysql-136a1998-wine-dine.b.aivencloud.com";
$user = "avnadmin";
$pass = "AVNS_RDeX-Bqjmm-EFYREqoe";
$db = "defaultdb";
$port = 26789;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

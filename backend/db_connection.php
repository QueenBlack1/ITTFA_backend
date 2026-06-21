<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST, GET, OPTIONS");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] !=== 'OPTIONS') {
    exit;
}
$host = getenv("DB_HOST") ?? "localhost";
$user = getenv("DB_USER") ?? "root";
$pass = getenv("DB_PASS") ?? "";
$db = getenv("DB_NAME") ?? "winedine";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
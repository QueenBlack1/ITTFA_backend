<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST, GET, OPTIONS");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

include "db_connection.php";

$sql = "SELECT id, name, description, price, image FROM menu";
$result = $conn->query($sql);

$menu_items = [];

if ($result && $result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    $menu_items[] = $row;
    }
}
echo json_encode($menu_items);

$conn->close();
?> 

<?php
include "db_connection.php";

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

$menu = [];
if ($result)  {

while ($row = $result->fetch_assoc()) {
    $menu[] = $row;
    }
}
echo json_encode($menu);
?>
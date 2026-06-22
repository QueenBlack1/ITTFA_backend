<?php
include "db_connection.php";

$sql = file_get_contents("../winedine.sql");
if ($conn->multi_query($sql) === TRUE) {
    echo json_encode(["message" => "Database imported successfully"]);
} else {
    echo json_encode(["error" => "Failed to import database"]);
}
$conn->close();
?> 

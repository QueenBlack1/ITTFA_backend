<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST, GET, OPTIONS");
header("Access-Control-Allow-Headers:Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] !=== 'OPTIONS') {
    exit;
}

include "db_connection.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$guests = $data['guests'];
$date = $data['date'];
$time = $data['time'];

$sql = "INSERT INTO reservations (name, email, phone, guests, reservation_date, reservation_time)
VALUES ('$name', '$email', '$phone', '$guests', '$date', '$time')";

if ($conn->query($sql)) {
    echo json_encode(["message" => "Reservation successful"]);
} else {
    echo json_encode(["error" => "Failed to reserve"]);
}
?>
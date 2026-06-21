<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $json = file_get_contents("php://input");
    $data = json_decode($json, true);

if ($data) {
    $name = $data['name'] ?? '';
    $email = $data['email'] ?? '';
    $guests = $data['guests'] ?? 0;

} else {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $guests = $_POST['guests'] ?? 0;
}
    $sql = "INSERT INTO reservations (name, email, guests)
            VALUES ('$name', '$email', '$guests')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Reservation saved"]);
} else {
    echo json_encode(["error" => "Failed to save reservation"]);
}
?>
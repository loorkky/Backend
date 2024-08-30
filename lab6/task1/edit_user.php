<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header('HTTP/1.1 403 Forbidden');
    echo json_encode(array("message" => "Unauthorized"));
    exit();
}

$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email'];
$newName = $data['name'];
$newPassword = $data['password'];

$hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

$sql = "UPDATE users SET name='$newName', password='$hashed_password' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true, "message" => "User updated successfully");
} else {
    $response = array("success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error);
}

echo json_encode($response);

$conn->close();

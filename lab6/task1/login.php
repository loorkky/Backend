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

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $response = array("success" => true, "message" => "Login successful");
    } else {
        $response = array("success" => false, "message" => "Invalid password");
    }
} else {
    $response = array("success" => false, "message" => "Email not found");
}

echo json_encode($response);

$conn->close();

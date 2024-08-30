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

$sql = "SELECT name, email FROM users";
$result = $conn->query($sql);

$userList = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userList[] = array("name" => $row["name"], "email" => $row["email"]);
    }
}

header('Content-Type: application/json');
echo json_encode($userList);

$conn->close();

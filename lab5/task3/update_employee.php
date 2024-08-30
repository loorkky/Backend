<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $conn->real_escape_string($_POST['id']);
$name = $conn->real_escape_string($_POST['name']);
$position = $conn->real_escape_string($_POST['position']);
$salary = $conn->real_escape_string($_POST['salary']);

$sql = "UPDATE employees SET name='$name', position='$position', salary='$salary' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Employee updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

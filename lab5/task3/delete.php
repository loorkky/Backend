<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employee_id = $conn->real_escape_string($_GET['id']);

$sql = "DELETE FROM employees WHERE id = $employee_id";

if ($conn->query($sql) === TRUE) {
    echo "Employee deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Statistics</title>
</head>
<body>
<h2>Employee Statistics</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_avg_salary = "SELECT AVG(salary) AS avg_salary FROM employees";
$result_avg_salary = $conn->query($sql_avg_salary);

if ($result_avg_salary->num_rows > 0) {
    $row_avg_salary = $result_avg_salary->fetch_assoc();
    $average_salary = $row_avg_salary['avg_salary'];
    echo "<p>Average Salary of Employees: $" . number_format($average_salary, 2) . "</p>";
} else {
    echo "No employees found";
}

// Calculate count of employees by position
$sql_count_positions = "SELECT position, COUNT(*) AS count FROM employees GROUP BY position";
$result_count_positions = $conn->query($sql_count_positions);

if ($result_count_positions->num_rows > 0) {
    echo "<h3>Number of Employees by Position:</h3>";
    while ($row_count_positions = $result_count_positions->fetch_assoc()) {
        echo "<li>" . $row_count_positions['position'] . ": " . $row_count_positions['count'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No employees found";
}

$conn->close();
?>
</body>
</html>

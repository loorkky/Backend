<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Employee</title>
</head>
<body>
<h2>Edit Employee</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employee_id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = $employee_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Employee not found";
    exit;
}
?>

<form action="update_employee.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    <label for="position">Position:</label><br>
    <input type="text" id="position" name="position" value="<?php echo $row['position']; ?>" required><br><br>
    <label for="salary">Salary:</label><br>
    <input type="text" id="salary" name="salary" value="<?php echo $row['salary']; ?>" required><br><br>
    <input type="submit" value="Update Employee">
</form>
</body>
</html>

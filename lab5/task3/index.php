<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Employees</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h2>List of Employees</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Actions</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["position"]."</td>";
            echo "<td>".$row["salary"]."</td>";
            echo '<td><a href="edit.php?id='.$row["id"].'">Edit</a> | <a href="delete.php?id='.$row["id"].'" onclick="return confirm(\'Are you sure?\')">Delete</a></td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No employees found</td></tr>";
    }
    $conn->close();
    ?>
</table>
<br>
<a href="add_employee.php">Add New Employee</a>
</body>
</html>

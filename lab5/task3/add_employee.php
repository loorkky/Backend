<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Employee</title>
</head>
<body>
<h2>Add New Employee</h2>
<form action="insert_employee.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="position">Position:</label><br>
    <input type="text" id="position" name="position" required><br><br>
    <label for="salary">Salary:</label><br>
    <input type="text" id="salary" name="salary" required><br><br>
    <input type="submit" value="Add Employee">
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
</head>
<body>
<h2>Вилучити запис</h2>
<form action="delete_process.php" method="post">
    <label for="id">Номер запису для вилучення:</label>
    <input type="text" id="id" name="id" required><br><br>

    <input type="submit" value="Вилучити запис">
</form>
</body>
</html>

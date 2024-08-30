<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Record</title>
</head>
<body>
    <h2>Додати запис</h2>
    <form action="insert_process.php" method="post">
        <label for="name">Назва товару:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="cost">Вартість:</label>
        <input type="text" id="cost" name="cost" required><br><br>

        <label for="kol">Кількість:</label>
        <input type="text" id="kol" name="kol" required><br><br>

        <label for="date">Дата реалізації:</label>
        <input type="text" id="date" name="date" placeholder="YYYY-MM-DD" required><br><br>

        <input type="submit" value="Додати запис">
    </form>
</body>
</html>

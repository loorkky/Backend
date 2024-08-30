<?php
$pdo = new PDO('mysql:host=localhost;dbname=lab5;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['add_record'])) {
    header("Location: insert.php");
    exit();
} elseif (isset($_POST['delete_record'])) {
    header("Location: delete.php");
    exit();
}

$sql = "SELECT * FROM products";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    echo "<h2>Дані з таблиці products:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Cost</th><th>Kol</th><th>Date</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['cost'] . "</td>";
        echo "<td>" . $row['kol'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Немає записів у таблиці</p>";
}
?>

<form method="post" action="">
    <br>
    <input type="submit" name="add_record" value="Додати запис">
    <input type="submit" name="delete_record" value="Вилучити запис">
</form>



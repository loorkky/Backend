<?php

$pdo = new PDO('mysql:host=localhost;dbname=lab5;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM products";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Cost: " . $row['cost'] . "<br>";
        echo "Kol: " . $row['kol'] . "<br>";
        echo "Date: " . $row['date'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Немає записів у таблиці";
}

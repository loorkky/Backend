<?php
$pdo = new PDO('mysql:host=localhost;dbname=lab5;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];

$sql = "DELETE FROM products WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

if ($stmt->rowCount() > 0) {
    echo "Запис з ID $id був успішно видалений з бази даних.";
} else {
    echo "Помилка: запис з ID $id не було видалено.";
}

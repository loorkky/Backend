<?php
$pdo = new PDO('mysql:host=localhost;dbname=lab5;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = $_POST['name'];
$cost = $_POST['cost'];
$kol = $_POST['kol'];
$date = $_POST['date'];

$sql = "INSERT INTO products (name, cost, kol, date) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $cost, $kol, $date]);

if ($stmt->rowCount() > 0) {
    echo "Новий запис успішно додано до бази даних.";
} else {
    echo "Помилка: запис не було додано.";
}
?>
<?php

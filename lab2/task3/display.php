<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$login = $_POST['login'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$games = isset($_POST['games']) ? $_POST['games'] : [];
$about = $_POST['about'];

$passwordMessage = $password === $confirm_password ? "співпадає" : "не співпадає (перший - " . strlen($password) . " символів, другий - " . strlen($confirm_password) . " символів)";

if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
mkdir($upload_dir, 0777, true);
}
$file_name = basename($_FILES['photo']['name']);
$target_file = $upload_dir . $file_name;

if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
$uploaded = true;
} else {
die("Помилка при завантаженні файлу.");
}
} else {
$uploaded = false;
}

echo "<h1>Дані користувача</h1>";
echo "<p><strong>Логін:</strong> $login</p>";
echo "<p><strong>Пароль:</strong> $passwordMessage</p>";
echo "<p><strong>Стать:</strong> $gender</p>";
echo "<p><strong>Місто:</strong> $city</p>";
echo "<p><strong>Улюблені гри:</strong> " . implode(", ", $games) . "</p>";
echo "<p><strong>Про себе:</strong> " . nl2br(htmlspecialchars($about)) . "</p>";

if ($uploaded) {
echo "<p><strong>Фотографія:</strong></p>";
echo "<img src='$target_file' alt='Фотографія користувача' width='200'><br>";
} else {
echo "<p><strong>Фотографія:</strong> не завантажена</p>";
}

echo '<p><a href="index.php">Повернутися на головну сторінку</a></p>';
} else {
die("Неправильний метод запиту.");
}
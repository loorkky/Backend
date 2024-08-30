<?php
$host = 'localhost';
$dbname = 'notes_app';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die('Помилка підключення до бази даних: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $title = $data['title'];
    $content = $data['content'];

    if (!empty($title) && !empty($content)) {
        $stmt = $db->prepare("INSERT INTO notes (title, content) VALUES (?, ?)");
        $stmt->execute([$title, $content]);
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Помилка: заголовок та текст не можуть бути порожніми']);
    }
}

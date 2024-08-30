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

    $id = $data['id'];
    $newTitle = $data['title'];
    $newContent = $data['content'];

    if (!empty($id) && !empty($newTitle) && !empty($newContent)) {
        $stmt = $db->prepare("UPDATE notes SET title = ?, content = ? WHERE id = ?");
        $stmt->execute([$newTitle, $newContent, $id]);
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Помилка: невірні дані для оновлення замітки']);
    }
}

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

$stmt = $db->query("SELECT * FROM notes");
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($notes);

<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=lab5;charset=utf8', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT * FROM users');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['username'] . '<br>';
    }

    echo 'Підключення до бази даних успішне!';

} catch (PDOException $e) {
    echo 'Помилка підключення до бази даних: ' . $e->getMessage();

    error_log('PDO Exception: ' . $e->getMessage(), 3, '/var/log/my_errors.log');
}

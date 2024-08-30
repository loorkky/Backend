<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['comment'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $data = "$name|$comment\n";
        file_put_contents('comments.txt', $data, FILE_APPEND);
    }
}

$comments = [];
$file = fopen('comments.txt', 'r');
if ($file) {
    while (($line = fgets($file)) !== false) {
        list($name, $comment) = explode('|', $line);
        $comments[] = ['name' => $name, 'comment' => $comment];
    }
    fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Коментарі</title>
</head>
<body>
    <h2>Додати коментар</h2>
    <form method="post" action="">
        <label for="name">Ім'я:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="comment">Коментар:</label><br>
        <textarea id="comment" name="comment"></textarea><br><br>
        <input type="submit" value="Додати">
    </form>

    <h2>Коментарі</h2>
    <table border="1">
        <tr>
            <th>Ім'я</th>
            <th>Коментар</th>
        </tr>
        <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $comment['name'] ?></td>
                <td><?= $comment['comment'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація користувача</title>
</head>
<body>
    <h1>Реєстрація користувача</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $baseDir = "D:\\wamp\\www\\lab3\\task5\\users\\";

        if (!empty($login) && !empty($password)) {
            $userDir = $baseDir . $login;

            if (file_exists($userDir)) {
                echo "Помилка: папка з таким логіном вже існує.<br>";
            } else {
                mkdir($userDir, 0777, true);
                mkdir($userDir . "\\video", 0777, true);
                mkdir($userDir . "\\music", 0777, true);
                mkdir($userDir . "\\photo", 0777, true);

                file_put_contents($userDir . "\\video\\example_video.txt", "Це приклад відео файлу.");
                file_put_contents($userDir . "\\music\\example_music.txt", "Це приклад музичного файлу.");
                file_put_contents($userDir . "\\photo\\example_photo.txt", "Це приклад фото файлу.");

                echo "Папка користувача та підпапки створені успішно.<br>";
            }
        } else {
            echo "Помилка: Логін та Пароль не можуть бути порожніми.<br>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="login">Логін:</label>
        <input type="text" name="login" id="login" required>
        <br><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="submit" value="Зареєструвати">
    </form>
</body>
</html>

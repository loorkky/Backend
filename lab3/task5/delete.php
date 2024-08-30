<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Видалення користувача</title>
</head>
<body>
    <h1>Видалення користувача</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $baseDir = "D:\\WampServer\\www\\lab3\\task5\\users\\";

        if (!empty($login) && !empty($password)) {
            $userDir = $baseDir . $login;

            if (file_exists($userDir)) {
                function deleteDir($dirPath) {
                    if (!is_dir($dirPath)) {
                        throw new InvalidArgumentException("$dirPath не є каталогом.");
                    }
                    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
                        $dirPath .= '/';
                    }
                    $files = glob($dirPath . '*', GLOB_MARK);
                    foreach ($files as $file) {
                        if (is_dir($file)) {
                            deleteDir($file);
                        } else {
                            unlink($file);
                        }
                    }
                    rmdir($dirPath);
                }

                deleteDir($userDir);
                echo "Папка користувача була успішно видалена.<br>";
            } else {
                echo "Помилка: папка з таким логіном не знайдена.<br>";
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
        <input type="submit" value="Видалити">
    </form>
</body>
</html>

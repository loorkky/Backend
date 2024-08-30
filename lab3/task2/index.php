<?php
session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}

if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    echo "Добрий день, {$_SESSION['username']}! <br>";
    echo '<a href="?logout">Вийти</a>';
    exit();
}

if(isset($_POST['login']) && isset($_POST['password'])) {
    if($_POST['login'] === 'Admin' && $_POST['password'] === 'password') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $_POST['login'];
        header('Location: index.php');
        exit();
    } else {
        $error = "Невірний логін або пароль!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизація</title>
</head>
<body>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="">
        <label for="login">Логін:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Увійти">
    </form>
</body>
</html>


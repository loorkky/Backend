<!DOCTYPE html>
<html>
<head>
    <title>Перевірка міцності пароля</title>
</head>
<body>

<h2>Перевірка міцності пароля</h2>
<form method="post">
    <label for="password">Введіть пароль:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Перевірити пароль">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    
    function checkPasswordStrength($password) {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
    
        if ($uppercase && $lowercase && $number && $specialChars && strlen($password) >= 8) {
            return true;
        } else {
            return false;
        }
    }
    
    if (checkPasswordStrength($password)) {
        echo "Пароль достатньо міцний!";
    } else {
        echo "Пароль не відповідає вимогам!";
    }
}
?>

</body>
</html>

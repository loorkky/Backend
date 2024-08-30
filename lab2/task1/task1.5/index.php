<!DOCTYPE html>
<html>
<head>
    <title>Генератор випадкового пароля</title>
</head>
<body>

<h2>Генератор випадкового пароля</h2>
<form method="post">
    <label for="passwordLength">Введіть довжину пароля:</label>
    <input type="number" name="passwordLength" id="passwordLength" min="1" value="8"><br>
    <input type="submit" value="Згенерувати пароль">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function generatePassword($length = 8) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = "";
        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $password;
    }
    
    $passwordLength = $_POST["passwordLength"];
    echo "Випадковий пароль: " . generatePassword($passwordLength);
}
?>

</body>
</html>

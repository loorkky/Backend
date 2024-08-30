<!DOCTYPE html>
<html>
<head>
    <title>Заміна символів</title>
</head>
<body>

<h2>Заміна символів</h2>
<form method="post">
    <label for="text">Текст:</label>
    <input type="text" name="text" id="text"><br>
    <label for="find">Знайти:</label>
    <input type="text" name="find" id="find"><br>
    <label for="replace">Замінити на:</label>
    <input type="text" name="replace" id="replace"><br>
    <input type="submit" value="Замінити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $find = $_POST["find"];
    $replace = $_POST["replace"];

    $result = str_replace($find, $replace, $text);
    echo "Результат: $result";
}
?>

</body>
</html>

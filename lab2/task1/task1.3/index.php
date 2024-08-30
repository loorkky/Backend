<!DOCTYPE html>
<html>
<head>
    <title>Виділення імені файлу без розширення</title>
</head>
<body>

<h2>Виділення імені файлу без розширення</h2>
<form method="post">
    <label for="filePath">Введіть повний шлях до файлу:</label>
    <input type="text" name="filePath" id="filePath"><br>
    <input type="submit" value="Виділити ім'я файлу">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filePath = $_POST["filePath"];
    $fileName = pathinfo($filePath, PATHINFO_FILENAME);
    echo "Ім'я файлу без розширення: $fileName";
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Визначення кількості днів між датами</title>
</head>
<body>

<h2>Визначення кількості днів між датами</h2>
<form method="post">
    <label for="date1">Дата 1 (День-Місяць-Рік):</label>
    <input type="text" name="date1" id="date1"><br>
    <label for="date2">Дата 2 (День-Місяць-Рік):</label>
    <input type="text" name="date2" id="date2"><br>
    <input type="submit" value="Визначити кількість днів">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = strtotime($_POST["date1"]);
    $date2 = strtotime($_POST["date2"]);
    $daysDiff = floor(($date2 - $date1) / (60 * 60 * 24));
    echo "Кількість днів між датами: $daysDiff";
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Впорядкування міст за алфавітом</title>
</head>
<body>

<h2>Впорядкування міст за алфавітом</h2>
<form method="post">
    <label for="cities">Введіть назви міст через пробіл:</label>
    <input type="text" name="cities" id="cities"><br>
    <input type="submit" value="Впорядкувати міста">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cities = $_POST["cities"];
    $citiesArray = explode(" ", $cities);
    sort($citiesArray);
    echo implode(" ", $citiesArray);
}
?>

</body>
</html>

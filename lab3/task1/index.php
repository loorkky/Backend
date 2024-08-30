<?php
if (isset($_GET['font'])) {
    $font_size = $_GET['font'];
    setcookie('font_size', $font_size, time() + (86400 * 30), "/"); // Тут 86400 секунд - це 1 доба. Зберігати cookie протягом 30 діб.
} else {
    if (isset($_COOKIE['font_size'])) {
        $font_size = $_COOKIE['font_size'];
    } else {
        $font_size = 'medium';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Size Selector</title>
</head>
<body style="font-size: <?php echo $font_size; ?>">
    <h1>Font Size Selector</h1>
    <ul>
        <li><a href="index.php?font=large">Великий шрифт</a></li>
        <li><a href="index.php?font=medium">Середній шрифт</a></li>
        <li><a href="index.php?font=small">Маленький шрифт</a></li>
    </ul>
</body>
</html>

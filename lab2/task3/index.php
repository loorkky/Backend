<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Форма реєстрації</title>
</head>
<body>
<form action="display.php" method="post" enctype="multipart/form-data">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" value="<?php echo isset($_SESSION['login']) ? $_SESSION['login'] : ''; ?>" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''; ?>" required><br><br>

    <label for="confirm_password">Пароль (ще раз):</label>
    <input type="password" id="confirm_password" name="confirm_password" value="<?php echo isset($_SESSION['confirm_password']) ? $_SESSION['confirm_password'] : ''; ?>" required><br><br>

    <label>Стать:</label>
    <input type="radio" id="male" name="gender" value="чоловік" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'чоловік') ? 'checked' : ''; ?> required>
    <label for="male">чоловік</label>
    <input type="radio" id="female" name="gender" value="жінка" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'жінка') ? 'checked' : ''; ?> required>
    <label for="female">жінка</label><br><br>

    <label for="city">Місто:</label>
    <select id="city" name="city" required>
        <option value="Житомир" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Житомир') ? 'selected' : ''; ?>>Житомир</option>
        <option value="Київ" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Київ') ? 'selected' : ''; ?>>Київ</option>
        <option value="Львів" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Львів') ? 'selected' : ''; ?>>Львів</option>
        <option value="Одеса" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Одеса') ? 'selected' : ''; ?>>Одеса</option>
        <option value="Харків" <?php echo (isset($_SESSION['city']) && $_SESSION['city'] === 'Харків') ? 'selected' : ''; ?>>Харків</option>
    </select><br><br>

    <label>Улюблені гри:</label><br>
    <input type="checkbox" id="football" name="games[]" value="футбол" <?php echo (isset($_SESSION['games']) && in_array('футбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
    <label for="football">футбол</label><br>
    <input type="checkbox" id="basketball" name="games[]" value="баскетбол" <?php echo (isset($_SESSION['games']) && in_array('баскетбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
    <label for="basketball">баскетбол</label><br>
    <input type="checkbox" id="volleyball" name="games[]" value="волейбол" <?php echo (isset($_SESSION['games']) && in_array('волейбол', $_SESSION['games'])) ? 'checked' : ''; ?>>
    <label for="volleyball">волейбол</label><br>
    <input type="checkbox" id="chess" name="games[]" value="шахи" <?php echo (isset($_SESSION['games']) && in_array('шахи', $_SESSION['games'])) ? 'checked' : ''; ?>>
    <label for="chess">шахи</label><br>
    <input type="checkbox" id="wot" name="games[]" value="World of Tanks" <?php echo (isset($_SESSION['games']) && in_array('World of Tanks', $_SESSION['games'])) ? 'checked' : ''; ?>>
    <label for="wot">World of Tanks</label><br><br>

    <label for="about">Про себе:</label><br>
    <textarea id="about" name="about" rows="4" cols="50"><?php echo isset($_SESSION['about']) ? $_SESSION['about'] : ''; ?></textarea><br><br>

    <label for="photo">Фотографія:</label>
    <input type="file" id="photo" name="photo"><br><br>

    <input type="submit" value="Зареєструватися">
</form>
</body>
</html>

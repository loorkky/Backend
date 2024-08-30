<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Завантаження зображення</title>
</head>
<body>
    <h1>Завантажте зображення</h1>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $targetDir = "D:\\WampServer\\www\\lab3\\task4\\uploads\\";

        if (isset($_FILES["file"])) {
            $targetFile = $targetDir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false) {
                echo "Файл є зображенням - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "Файл не є зображенням.<br>";
                $uploadOk = 0;
            }
            
            if (file_exists($targetFile)) {
                echo "Вибачте, файл вже існує.<br>";
                $uploadOk = 0;
            }
            
            if ($_FILES["file"]["size"] > 5000000) {
                echo "Вибачте, ваш файл занадто великий.<br>";
                $uploadOk = 0;
            }
            
            $allowedFormats = ["jpg", "jpeg", "png", "gif"];
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Вибачте, дозволені лише JPG, JPEG, PNG та GIF файли.<br>";
                $uploadOk = 0;
            }
            
            if ($uploadOk == 0) {
                echo "Вибачте, ваш файл не було завантажено.<br>";
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                    echo "Файл " . htmlspecialchars(basename($_FILES["file"]["name"])) . " було успішно завантажено.<br>";
                } else {
                    echo "Вибачте, виникла помилка при завантаженні вашого файлу.<br>";
                }
            }
        } else {
            echo "Файл не було завантажено.<br>";
        }
    }
    ?>
    
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Виберіть зображення:</label>
        <input type="file" name="file" id="file">
        <br><br>
        <input type="submit" value="Завантажити">
    </form>
</body>
</html>

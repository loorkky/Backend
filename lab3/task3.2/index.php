<?php
function readLinesFromFile($filename) {
    return file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

function writeLinesToFile($filename, $lines) {
    $file = fopen($filename, "w");
    foreach ($lines as $line) {
        fwrite($file, $line . "\n");
    }
    fclose($file);
}

function executeTaskOne($file1, $file2, $dir) {
    $lines1 = readLinesFromFile($file1);
    $lines2 = readLinesFromFile($file2);

    $uniqueLines1 = array_diff($lines1, $lines2);
    $uniqueLines1File = $dir . "/unique_lines_in_file1.txt";
    writeLinesToFile($uniqueLines1File, $uniqueLines1);

    $commonLines = array_intersect($lines1, $lines2);
    $commonLinesFile = $dir . "/common_lines.txt";
    writeLinesToFile($commonLinesFile, $commonLines);

    $counts = array_count_values($commonLines);
    $commonLinesTwice = array_filter($commonLines, function($value) use ($counts) {
        return $counts[$value] > 1;
    });
    $commonLinesTwiceUnique = array_flip(array_flip($commonLinesTwice));
    $commonLinesTwiceFile = $dir . "/common_lines_twice.txt";
    writeLinesToFile($commonLinesTwiceFile, $commonLinesTwiceUnique);

    return [$uniqueLines1File, $commonLinesFile, $commonLinesTwiceFile];
}

function deleteFileIfExists($filename) {
    if (file_exists($filename)) {
        unlink($filename);
        echo "Файл '$filename' успішно видалено.";
    } else {
        echo "Файл '$filename' не існує.";
    }
}

function main() {
    $dir = "D:/WampServer/www/lab3/task3.2";
    $file1 = "$dir/file1.txt";
    $file2 = "$dir/file2.txt";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $fileToDelete = $_POST['filename'];
        deleteFileIfExists($fileToDelete);
    }

    $resultFiles = executeTaskOne($file1, $file2, $dir);

    echo "Результати збережено у наступних файлах:\n";
    foreach ($resultFiles as $file) {
        echo "$file\n";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Видалення файлу</title>
</head>
<body>
<h2>Видалення файлу</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="filename">Введіть ім'я файлу, який бажаєте видалити:</label><br>
    <input type="text" id="filename" name="filename"><br><br>
    <input type="submit" name="submit" value="Видалити файл">
</form>
</body>
</html>

<?php
main();
?>

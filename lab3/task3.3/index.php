<?php
$filename = 'words.txt';

$fileContent = file_get_contents($filename);

$words = preg_split('/\s+/', trim($fileContent));

sort($words);

$sortedContent = implode("\n", $words);

file_put_contents($filename, $sortedContent);

echo "Слова були впорядковані за алфавітом та записані назад у файл.";
?>
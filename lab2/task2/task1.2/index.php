<?php

function getRandomElement($array) {
    if (is_array($array)) {
        return $array[array_rand($array)];
    } else {
        return $array;
    }
}

function generateAnimalName($syllables) {
    $name = '';

    foreach ($syllables as $syllable) {
        $isVowel = rand(0, 1);
        $chosenSyllable = getRandomElement($syllable);
        $name .= $isVowel ? getRandomElement($chosenSyllable) : getRandomElement($chosenSyllable, 1);
    }

    return ucfirst($name);
}

$syllables = [
    [['me', 'mi', 'mu'], ['aw', 'az', 'ak'], ['lo', 'lu', 'le']],
    [['do', 'di', 'du'], ['ga', 'ge', 'gi'], ['bo', 'be', 'bu']], 
    [['ha', 'he', 'ho'], ['ma', 'me', 'mi'], ['ster', 'sta', 'stu']],
    [['ka', 'ki', 'ku'], ['po', 'pu', 'pe'], ['ra', 'ri', 'ru']],
    [['no', 'nu', 'ne'], ['sa', 'su', 'se'], ['te', 'ti', 'to']],
];

$names = array_map('generateAnimalName', $syllables);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Генератор імен тварин</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="generate">Згенерувати</button>
    </form>
    <?php if (isset($_POST['generate'])): ?>
        <p>Ім'я тваринки: <?= $names[array_rand($names)] ?></p>
    <?php endif; ?>
</body>
</html>


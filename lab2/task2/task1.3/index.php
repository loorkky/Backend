<?php
function createArray() {
    $length = rand(3, 7);
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(10, 20);
    }
    return $array;
}

function processArrays($array1, $array2) {
    $mergedArray = array_merge($array1, $array2);
    $uniqueArray = array_unique($mergedArray);
    sort($uniqueArray);
    return $uniqueArray;
}

$array1 = createArray();
$array2 = createArray();

$resultArray = processArrays($array1, $array2);

echo "Масив 1: " . implode(", ", $array1) . "\n";
echo "Масив 2: " . implode(", ", $array2) . "\n";
echo "Результат: " . implode(", ", $resultArray) . "\n";

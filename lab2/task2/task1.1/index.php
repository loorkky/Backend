<?php
function findDuplicates($arr) {
    $duplicates = array();
    $counts = array_count_values($arr);
    
    foreach ($counts as $value => $count) {
        if ($count > 1) {
            $duplicates[] = $value;
        }
    }
    
    return $duplicates;
}

$arr = array();
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 20);
}

echo "Масив: " . implode(', ', $arr) . "\n";

$duplicates = findDuplicates($arr);
echo "Повторюючі елементи: " . implode(', ', $duplicates);


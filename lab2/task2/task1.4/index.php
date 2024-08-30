<?php
$users = array(
    "John" => 25,
    "Alice" => 30,
    "Bob" => 20,
    "Emma" => 22
);

function sortUsers($array, $sortBy) {
    if ($sortBy === "age") {
        asort($array);
    }
    elseif ($sortBy === "name") {
        ksort($array);
    }
    return $array;
}

$sortedByAge = sortUsers($users, "age");
echo "Сортування за віком:\n";
print_r($sortedByAge);

$sortedByName = sortUsers($users, "name");
echo "Сортування за іменами в алфавітному порядку:\n";
print_r($sortedByName);
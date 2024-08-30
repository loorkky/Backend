<?php
$char = 'i';

$char = strtolower($char);

switch ($char) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        $result = "голосна";
        break;
    default:
        $result = "приголосна";
        break;
}

echo "Символ '{$char}' є {$result}.";


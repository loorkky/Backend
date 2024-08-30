<?php
$number = mt_rand(100, 300);

$sum = array_sum(str_split($number));

$reversedNumber = strrev($number);

$digits = str_split($number);
rsort($digits);
$maxNumber = implode($digits);

echo "1. Сума цифр числа {$number} дорівнює {$sum}.<br>";
echo "2. Число, отримане виписуванням в зворотному порядку цифр числа {$number}, дорівнює {$reversedNumber}.<br>";
echo "3. Найбільше число, яке можна утворити з цифр числа {$number}, дорівнює {$maxNumber}.<br>";

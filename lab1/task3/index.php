<?php
$exchangeRate = 0.034;
$amountInUAH = 1500;

$amountInUSD = $amountInUAH * $exchangeRate;

echo "{$amountInUAH} грн. можна обміняти на {$amountInUSD} долар";

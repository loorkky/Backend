<?php
require_once(__DIR__ . '/func.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result_xy = \Function\my_pow($num1, $num2);
    $result_factorial = \Function\factorial($num1);
    $result_my_tg = \Function\my_tg($num1);
    $result_sin = \Function\my_sin($num1);
    $result_cos = \Function\my_cos($num1);
    $result_tg = \Function\my_tan($num1);

    echo "X^Y result: $result_xy <br>";
    echo "Factorial result: $result_factorial <br>";
    echo "My Tg result: $result_my_tg <br>";
    echo "Sin result: $result_sin <br>";
    echo "Cos result: $result_cos <br>";
    echo "Tg result: $result_tg <br>";
}

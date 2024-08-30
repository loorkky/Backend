<?php
function generateRedSquares($n) {
    echo "<div style='position: relative; width: 500px; height: 500px; background-color: black;'>";
    for ($i = 0; $i < $n; $i++) {
        $size = mt_rand(20, 100);
        $left = mt_rand(0, 400);
        $top = mt_rand(0, 400);
        echo "<div style='position: absolute; left: {$left}px; top: {$top}px; width: {$size}px; height: {$size}px; background-color: red;'></div>";
    }
    echo "</div>";
}


generateRedSquares(3);

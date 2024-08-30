<?php
function generateColorTable($rows, $columns) {
    echo "<table border='1' cellpadding='10'>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columns; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='background-color: $color;'>$color</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

generateColorTable(5, 5);
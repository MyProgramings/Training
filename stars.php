<?php
function stars($n)
{
    echo "<pre>";

    // Top part (upper X)
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n * 2 - 1; $j++) {
            if ($j == $n - 1 - $i || $j == $n - 1 + $i) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }

    // Middle line
    for ($i = 0; $i < $n * 2 - 1; $i++) {
        echo "*";
    }
    echo "\n";

    // Bottom part (lower X)
    for ($i = $n - 1; $i >= 0; $i--) {
        for ($j = 0; $j < $n * 2 - 1; $j++) {
            if ($j == $n - 1 - $i || $j == $n - 1 + $i) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }

    echo "</pre>";
}

echo stars(10);

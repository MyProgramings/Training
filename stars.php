<?php
function stars($n)
{
    echo ("<pre>");
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i + $j == $n - 1 && $i + $j == $n - 1 && $i != 0) {
                print('*');
            } else {
                print(" ");
            }
        }
        for ($j = 0; $j < $i + 1; $j++) {
            if ($i == $j) {
                print('*');
            } else {
                print(" ");
            }
        }
        echo ("<pre>");
    }

    for ($j = 0; $j < $n * 2 - 1; $j++) {
        print('*');
    }
    echo ("<pre>");

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j && $i != $n - 1) {
                print('*');
            } else {
                print(" ");
            }
        }
        for ($j = 0; $j < $n - $i; $j++) {
            if ($i + $j == $n - 1 && $i + $j == $n - 1) {
                print('*');
            } else {
                print(" ");
            }
        }
        echo ("<pre>");
    }
}

echo stars(10);

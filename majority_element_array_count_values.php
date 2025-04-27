<?php
function maxOnesIndices($arr)
{
    $count = 0;
    $candidate = null;
    $n = count($arr);
    $i = 0;

    // المرحلة الأولى: اختيار مرشح
    while ($i < $n) {
        if ($count === 0) {
            $candidate = $arr[$i];
            $count = 1;
        } else {
            $count += ($arr[$i] === $candidate) ? 1 : -1;
        }
        $i++;
    }

    // المرحلة الثانية: تحقق
    $count = 0;
    $i = 0;
    while ($i < $n) {
        if ($arr[$i] === $candidate) {
            $count++;
        }
        $i++;
    }

    return ($count > floor($n / 2)) ? $candidate : null;
}

echo "\nmax subArray: [" .maxOnesIndices([2, 3, 1, 4, 4, 1, 4, 4]) . "]\n";

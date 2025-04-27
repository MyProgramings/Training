<?php
function maxOnesIndices($arr, $size)
{
    $current_sum = 0;
    $max_sum_seen = 0;
    for ($i=0; $i < count($arr); $i++) { 
        $current_sum += $arr[$i];
        if ($i >= $size - 1) {
            $max_sum_seen = max($current_sum, $max_sum_seen);
            $current_sum -= $arr[$i - ($size - 1)];
        }
    }
    return $max_sum_seen;
}

echo "\nOriginal Array: [" .maxOnesIndices([7, 2, 4, 6, 5, 3, 8], 3) . "]\n";
echo "-------------------------------\n";
echo "\nOriginal Array: [" .maxOnesIndices([3, 2, 8, 1, 7, 4, 5, 9, 6], 4) . "]\n";

<?php
function maxOnesIndices($arr)
{
    $i = 1; $n = count($arr);
    $max_count_seen =0;
    $current_count = 0;
    while ($i < $n - 1) {
        if ($arr[$i - 1] < $arr[$i] && $arr[$i] > $arr[$i + 1]) {

            $left = $i - 1;
            while ($left > 0 && $arr[$left - 1] < $arr[$left]) {
                $left--;
            }

            $right = $i + 1;
            while ($right < $n -1 && $arr[$right] > $arr[$right + 1]) {
                $right++;
            }

            $current_count = $right - $left + 1;
            $max_count_seen = max($current_count, $max_count_seen);

            $i = $right;
        } else {
            $i++;
        }
    }
    return $max_count_seen;
}

echo "\nmax subArray: [" .maxOnesIndices([2, 1, 4, 7, 3, 2, 3, 4, 5, 4, 3, 2]) . "]\n";

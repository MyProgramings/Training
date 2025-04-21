<?php
function max_sum_subarray($arr, $k) {
    $max_sum = 0;
    $window_sum = 0;
    $window_start = 0;

    for ($window_end = 0; $window_end < count($arr); $window_end++) {
        $window_sum += $arr[$window_end]; // أضف العنصر الجديد

        // وصلنا لطول النافذة المطلوب
        if ($window_end >= $k - 1) {
            $max_sum = max($max_sum, $window_sum);
            $window_sum -= $arr[$window_start]; // أزل العنصر القديم
            $window_start++; // حرّك بداية النافذة
        }
    }

    return $max_sum;
}

// Test
echo max_sum_subarray([2, 1, 5, 1, 3, 2], 3); // الناتج: 9
?>

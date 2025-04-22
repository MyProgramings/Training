<?php
function mergeSort(&$arr, $start, $end)
{
    if ($start < $end) {
        $mid = (int)(($start + $end) / 2);
        mergeSort($arr, $start, $mid);
        mergeSort($arr, $mid + 1, $end);
        merge($arr, $start, $mid, $mid + 1, $end);
    }
}
function merge(&$arr, $arr1B, $arr1E, $arr2B, $arr2E)
{
    $i = $arr1B;
    $j = $arr2B;
    $temp = [];
    while ($i <= $arr1E && $j <= $arr2E) {
        if (($arr[$i] . $arr[$j]) > ($arr[$j] . $arr[$i])) {
            $temp[] = $arr[$i++];
        } else {
            $temp[] = $arr[$j++];
        }
    }
    while ($i <= $arr1E)
        $temp[] = $arr[$i++];

    while ($j <= $arr2E)
        $temp[] = $arr[$j++];

    $k = $arr1B;
    foreach ($temp as $value) {
        $arr[$k++] = $value;
    }
}

$originalArray = [3, 5, 2, 1, 7, 9, 22, 4, 88, 77, 100, 89, 99];

echo "<pre>";
echo "================================\n";
echo "        MERGE SORT RESULT        \n";
echo "================================\n\n";

echo "Original Array:\n";
echo "-------------------------------\n";
echo "\nOriginal Array: [" . implode(', ', $originalArray) . "]\n";

mergeSort($originalArray, 0, count($originalArray) - 1);

echo "\nSorted Array (Ascending Order):\n";
echo "-------------------------------\n";
echo "\nLargest number: " . implode('', $originalArray) . "\n";

echo "\nExecution Summary:\n";
echo "-------------------------------\n";
echo "- Total Elements: " . count($originalArray) . "\n";
echo "- Sorting Algorithm: Merge Sort\n";
echo "- Time Complexity: O(n log n)\n";
echo "- Space Complexity: O(n)\n";
echo "</pre>";

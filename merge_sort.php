<?php
function mergeSort(&$arr, $start, $end) {
    if ($start < $end) {
        $mid = (int)(($start + $end) / 2);
        mergeSort($arr, $start, $mid);
        mergeSort($arr, $mid +1, $end);
        merge($arr, $start, $mid, $mid +1, $end);
    }
}
function merge(&$arr, $arr1B, $arr1E, $arr2B, $arr2E){
    $i = $arr1B;
    $j = $arr2B;
    $temp = [];
    while ($i <= $arr1E && $j <= $arr2E) {
        if ($arr[$i] < $arr[$j]) {
            $temp[] = $arr[$i++];
        } else {
            $temp[] = $arr[$j++];
        }
    }
    while($i<=$arr1E)
        $temp[] = $arr[$i++];

    while($j<=$arr2E)
        $temp[] = $arr[$j++];

    $k = $arr1B;
    foreach ($temp as $value) { 
        $arr[$k++] = $value;
    }
}

// Input array
$originalArray = [3, 5, 2, 1, 7, 9, 22, 4, 88, 77, 100, 89, 99];

// Display results
echo "<pre>";
echo "================================\n";
echo "        MERGE SORT RESULT        \n";
echo "================================\n\n";

echo "Original Array:\n";
echo "-------------------------------\n";
print_r($originalArray);

// Sort the array
mergeSort($originalArray, 0, count($originalArray) - 1);

echo "\nSorted Array (Ascending Order):\n";
echo "-------------------------------\n";
print_r($originalArray);

echo "\nExecution Summary:\n";
echo "-------------------------------\n";
echo "- Total Elements: " . count($originalArray) . "\n";
echo "- Sorting Algorithm: Merge Sort\n";
echo "- Time Complexity: O(n log n)\n";
echo "- Space Complexity: O(n)\n";
echo "</pre>";
?>
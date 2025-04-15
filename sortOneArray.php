<?php
function sortArray($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) { 
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$minIndex];
            $array[$minIndex] = $temp;
        }
    }
    return $array;
}
$originalArray = [3, 5, 2, 1, 7, 9, 22, 4, 88, 77, 89, 99, 100];
// Sort the array
$sortedArray = sortArray($originalArray);

// Display results professionally
echo "<pre>";
echo "================================\n";
echo "        ARRAY SORTING RESULT     \n";
echo "================================\n\n";

echo "Original Array:\n";
echo "-------------------------------\n";
print_r($originalArray);

echo "\nSorted Array (Ascending Order):\n";
echo "-------------------------------\n";
print_r($sortedArray);

echo "\nExecution Summary:\n";
echo "-------------------------------\n";
echo "- Total Elements: " . count($originalArray) . "\n";
echo "- Sorting Algorithm: Selection Sort\n";
echo "- Time Complexity: O(n²)\n";
echo "</pre>";
?>
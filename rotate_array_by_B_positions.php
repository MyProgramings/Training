<?php
function rotateArray($array, $b) {
    $newArrr = [];
    $length = count($array);
    $b = $b % $length;
    for ($i = $b; $i < $length; $i++) {
        $newArrr[] = $array[$i];
    }
    for ($i = 0; $i < $b; $i++) {
        $newArrr[] = $array[$i];
    }
    return $newArrr;
}
$a = [14, 5, 14, 34, 42, 63, 17, 25, 39, 61, 97, 55, 33, 96, 62, 32, 98, 77, 35];
$b = 56;
$rotated = rotateArray($a, $b);

echo "<pre>";
echo "================================\n";
echo "        Rotate Array     \n";
echo "================================\n\n";

echo "Original Array:\n";
echo "-------------------------------\n";
echo implode(" ", $a) . "\n\n";

echo "\nrotate Array (Ascending Order):\n";
echo "-------------------------------\n";
echo implode(" ", $rotated) . "\n\n";

echo "\nExecution Summary:\n";
echo "-------------------------------\n";
echo "- Total Elements: " . count($rotated) . "\n";
echo "- Rotation Steps: $b\n";
echo "- Rotation Type: Left Rotation\n";
echo "- Method: Custom (No built-in slice/merge)\n";
echo "- Time Complexity: O(n)\n";
echo "- Space Complexity: O(n)\n";
echo "</pre>";
?>
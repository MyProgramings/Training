<?php
function addAndSortTwoarrays($l1, $l2) {
    $fullArr = [];
    $i=0; $j=0; $k=0;
    $size1 = count($l1);
    $size2 = count($l2);
    while($i<$size1 && $j<$size2){
        if ($l1[$i] < $l2[$j]) {
            $fullArr[$k] = $l1[$i];
            $i++;
            $k++;
        } elseif ($l1[$i] > $l2[$j]) {
            $fullArr[$k] = $l2[$j];
            $j++;
            $k++;
        } else {
            $fullArr[$k] = $l1[$i];
            $i++;
            $j++;
            $k++;
        }
    }
    while($i<$size1)
        $fullArr[$k++] = $l1[$i++];

    while($j<$size2)
        $fullArr[$k++] = $l2[$j++];

    return $fullArr;
}
$l1 = [3, 5, 9, 22, 70, 97, 98, 99];
$l2 = [2, 4, 9, 8, 15, 45, 72];
// $l1 = [2, 4, 3];
// $l2 = [5, 6, 4];
echo ("<pre>");
print_r(addAndSortTwoarrays($l1, $l2));
echo ("<pre>");
?>
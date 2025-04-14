<?php
function sortArray($l1) {
    $i=0; $k=0;
    $size1 = count($l1);
    while($i<$size1){
        for ($j=$i + 1; $j < $size1; $j++) { 
            if ($l1[$i] > $l1[$j]) {
                $swap = $l1[$j];
                print($j . " " . $swap);
                echo ("\n");
                $l1[$j] = $l1[$i];
            }
        }
        $l1[$i] = $swap;
        $i++;
    }

    return $l1;
}
$l1 = [3, 5, 2, 1, 7, 9, 22, 4, 88, 0, 199];
echo ("<pre>");
print_r(sortArray($l1));
echo ("<pre>");
?>
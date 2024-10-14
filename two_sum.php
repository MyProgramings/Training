<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // function two_sum($review, $target) {
    //     for($i=0; $i<count($review); $i++){
    //         for($j=$i+1; $j<count($review); $j++){
    //             if($review[$i] + $review[$j] == $target){
    //                 return [$i+1, $j+1];
    //             }
    //         }
    //     }
    //     return [];
    // }
    function two_sum($review, $target) {
        $left = 0; $right = count($review) - 1;
        while($left < $right){
            $sum = $review[$left] + $review[$right];
            if($review[$left] + $review[$right] == $target){
                return [$left+1, $right+1];
            }
            if($sum > $target){
                $right--;
            }
            else{
                $left++;
            }
        }
        return [];
    }

    // $review = [2, 7, 15, 11];
    // $review = [2, 4, 3, 2, 7, 8];
    // $review = [-1, 0];
    $review = [2, 3, 4, 5, 6, 7];
    $target = 6;
    echo ("<pre>");
    print_r(two_sum($review, $target));
    echo ("<pre>");
    ?>
</body>
</html>
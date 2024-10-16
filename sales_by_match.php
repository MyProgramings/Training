<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sockMerchant($n, $ar) {
        $count = 0;
        for($i=0; $i<$n; $i++){
            for($j=$i+1; $j<$n; $j++){
                if($ar[$i] == $ar[$j] && $ar[$i] != 0){
                    $count++;
                    $ar[$j]=0;
                    break;
                }
            }
        }
        return $count;
    }

    $n = 20;
    $ar = [4, 5, 5, 5, 6, 6, 4, 1, 4, 4, 3, 6, 6, 3, 6, 1, 4, 5, 5, 5];
    echo ("<pre>");
    print_r(sockMerchant($n, $ar));
    echo ("<pre>");
    ?>
</body>
</html>
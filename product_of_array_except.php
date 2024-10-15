<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function product_of_array_except($integer_array) {
        $answer = [];
        define("N", count($integer_array));
        $prefix = [];
        for($i=0; $i<N; $i++){
            $prefix[$i] = ($i > 0 ? $prefix[$i-1] : 1) * $integer_array[$i];
        }
        $suffix = [];
        for($i=N-1; $i>=0; $i--){
            $suffix[$i] = ($i < N - 1 ? $suffix[$i+1] : 1) * $integer_array[$i];
        }
        for($i=0; $i<N; $i++){
            $answer[$i] = ($i>0 ? $prefix[$i-1] : 1) * ($i<N-1 ? $suffix[$i+1] : 1);
        }
        return $answer;
    }

    // $integer_array = [2, 7, 15, 11];
    $integer_array = [2, 4, 3, 2, 7, 8];
    // $integer_array = [-1, 0];
    // $integer_array = [1, 2, 3, 4, 5, 6];
    echo ("<pre>");
    print_r(product_of_array_except($integer_array));
    echo ("<pre>");
    ?>
</body>
</html>
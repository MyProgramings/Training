<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function birthday($s, $d, $m) {
        // Write your code here
        $i = 0;
        $count = 0;
        for($j = $m-1; $j<count($s); $j++){
            if(($s[$i] + $s[$j]) == $d)
                $count++;
            $i++;
        }
        return $count;
    }

    // $s = [2, 2, 1, 3, 2];
    // $s = [1, 2, 1, 3, 2];
    // $s = [1, 1, 1, 1, 1, 1];
    $s = [4];
    $d = 4;
    $m = 1;
    echo ("<pre>");
    print_r(birthday($s, $d, $m));
    echo ("<pre>");
    ?>
</body>
</html>
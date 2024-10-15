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
        define("N", count($s));
        $some = 0;
        $summing = [];
        $count = 0;
        for($i=0; $i<N-($m-1); $i++){
            for($j=0; $j<$m; $j++){
                $some += $s[$i+$j];
                print_r("some: (".$i.") (".$j.") = ".$some."<br>");
            }
            $summing[$i] = $some;
            print_r("summing: (".$i.") = ".$summing[$i]."<br>");
            $some = 0;
            if($summing[$i] == $d)
                $count++;
        }
        return $count;
    }

    // $s = [2, 2, 1, 3, 2];
    // $s = [1, 2, 1, 3, 2];
    $s = [1, 1, 1, 1, 1, 1];
    $s = [4];
    $d = 4;
    $m = 1;
    echo ("<pre>");
    print_r(birthday($s, $d, $m));
    echo ("<pre>");
    ?>
</body>
</html>
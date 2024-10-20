<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function give_good($date) {
        $day_number = 0;
        $month = str_split($date, 2);
        $day = str_split($date, 2);
        for($i=1; $i<=$month[4]; $i++){
            if($month[4] == $i){
                if($month[4] == 2){
                    for($j=$i-1; $j>0; $j--){
                        $day_number += 28;
                    }
                    $day_number += $day;
                }  
                elseif($month[4] == 4 || $month[4] == 6 || $month[4] == 9 || $month[4] == 11){
                    for($j=$i-1; $j>0; $j--){
                        $day_number += 30;
                    }
                    $day_number += $day;
                }
                else{
                    for($j=$i-1; $j>0; $j--){
                        $day_number += 31;
                    }
                    $day_number += $day;
                }
            }
        }
        return $month;
    }

    echo ("<pre>");
    print_r(give_good("2019-01-09"));
    echo ("<pre>");
    ?>
</body>
</html>
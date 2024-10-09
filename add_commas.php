<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function add_commas_and_underscore($number)
    {
        $array = str_split($number);
        $new_array = [];
        $three_num = 0;
        if (count($array) <= 3)
            return $number;
        else {
            for ($i = count($array) - 1; $i >= 0; $i--) {
                $three_num++;
                if ($three_num % 3 == 0) {
                    array_push($new_array, $array[$i]);
                    if ($three_num < 6)
                        array_push($new_array, "_");
                    else
                        array_push($new_array, ",");
                } else
                    array_push($new_array, $array[$i]);
            }
        }
        $new_array = array_reverse($new_array);
        return implode($new_array);
    }
    echo ("<pre>");
    print_r(add_commas_and_underscore(120)); # 120
    echo ("<pre>");
    print_r(add_commas_and_underscore(1530)); # 1_530 
    echo ("<pre>");
    print_r(add_commas_and_underscore(12069057014032)); # 12,069,057,014_032
    echo ("<pre>");
    print_r(add_commas_and_underscore(1206905701768840372)); # 12,069,057,014_032
    echo ("<pre>");
    ?>
</body>

</html>
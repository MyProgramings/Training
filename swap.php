<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function give_good($word) {
        $array_letters = str_split($word);
        $count = 0;
        for($i=1; $i<count($array_letters); $i++){
            if($array_letters[$i] == 0){
                $f = $array_letters[$i];
                $array_letters[$i] = $array_letters[$i-1];
                $array_letters[$i-1] = $f;
                $count++;
            }
        }
        return $count;
    }

    echo ("<pre>");
    print_r(give_good("101"));
    echo ("<pre>");
    ?>
</body>
</html>
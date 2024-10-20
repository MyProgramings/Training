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
        // $array_letters = str_split($word);
        // for($i=0; $i<count($array_letters); $i++){
        //     if(ctype_upper($array_letters[$i])){
        //         if(strtolower($array_letters[$i]) == strtolower($array_letters[$i-1])){
        //             $array_letters[$i-1] = "*";
        //         }
        //         $array_letters[$i] = "*";
        //     }
        // }
        // print("<br>");
        // return $array_letters;
        $array_letters = str_split($word);
        $new_array = [];
        for($i=0; $i<count($array_letters); $i++){
            if(ctype_upper($array_letters[$i]) || ctype_upper($array_letters[$i+1])){
                if(strtolower($array_letters[$i]) == strtolower($array_letters[$i+1])){
                    continue;
                }
                continue;
            }
            else
                array_push($new_array, $array_letters[$i]);
        }
        print("<br>");
        return implode($new_array);
    }

    $st1 = "DabBAcCf";
    print_r(give_good($st1));
    ?>
</body>
</html>
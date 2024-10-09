<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function remove_duplicate_words_from($sentence)
    {
        $array_words = explode(" ", $sentence);
        $exit = false;
        $new_array = [];
        for ($i = 0; $i < count($array_words); $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($array_words[$i] == $array_words[$j]) {
                    $exit = true;
                    break;
                }
            }
            if ($exit != true) {
                array_push($new_array, $array_words[$i]);
            }
            $exit = false;
        }
        return implode(" ", $new_array);
    }

    # Testing Ouput
    echo ("<pre>");
    print_r(remove_duplicate_words_from("Hello Elzero Web Web Hello School Hello Elzero Web Web Hello School")); # Hello Elzero Web School
    echo ("<pre>");
    ?>
</body>

</html>
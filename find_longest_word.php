<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function longest_word_in($given_words)
    {
        $array_words = explode(" ", $given_words);
        $long_word = "";
        for($i=0; $i<count($array_words); $i++){
            if(strlen($array_words[$i]) > strlen($long_word)){
                $long_word = $array_words[$i];
            }
        }
        return $long_word;
    }

    $given_num = 9832367621;
    // $given_num = 123789;
    // $given_num = 456789;
    echo ("<pre>");
    // Testing Ouput
    print_r(longest_word_in("In Programming We Love Elzero Academy Tooooooooooo Much")); // Tooooooooooo
    echo ("<pre>");
    ?>
</body>

</html>
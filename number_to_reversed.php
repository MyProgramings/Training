<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function find_missing_letter_in($given_num)
    {
        $string_num = strval($given_num);
        $array_num = str_split($string_num);
        $array_num = array_reverse($array_num);
        $string_num = implode($array_num);
        $given_num = (int)$string_num;


        return var_dump($given_num);
    }

    $given_num = 9832367621;
    // $given_num = 123789;
    // $given_num = 456789;
    echo ("<pre>");
    print_r(find_missing_letter_in($given_num));
    echo ("<pre>");
    ?>
</body>

</html>
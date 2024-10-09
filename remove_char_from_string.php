<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function remove_char_from($given_words, $letter)
    {
        $array_letters = str_split($given_words);
        $new_array = [];
        for ($i = 0; $i < count($array_letters); $i++) {
            if ($array_letters[$i] != strtolower($letter) && $array_letters[$i] != strtoupper($letter)) {
                array_push($new_array, $array_letters[$i]);
            }
        }
        return implode($new_array);
    }

    # Testing Ouput
    echo ("<pre>");
    print_r(remove_char_from("ElddzeroD WebDD ddSchool", "d"));  # Elzero Web School
    echo ("<pre>");
    print_r(remove_char_from("ElxzeroX Web Sxchool", "x"));  # Elzero Web School
    echo ("<pre>");
    print_r(remove_char_from("Elzero@ Web@@ @@School", "@"));  # Elzero Web School
    echo ("<pre>");
    ?>
</body>

</html>
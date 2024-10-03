<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// abcdefghijklmnopqrstuvwxyz
function find_missing_letter_in($given_letters){
    $arr_letter = str_split($given_letters);
    $all_letters = range($arr_letter[0], 'z');
    for($i = 0; $i<count($arr_letter); $i++){
        if($all_letters[$i] != $arr_letter[$i]){
            return $all_letters[$i];
        }
    }
    return "No missing Letter";
}
// $given_letters = "abcdeghi";
// $given_letters = "defgi dkl";
$given_letters    = "xyz";
print(find_missing_letter_in($given_letters));
?>
</body>
</html>
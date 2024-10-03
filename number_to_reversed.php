<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function find_missing_letter_in($given_num){
    $string_num = strval($given_num);
    $array_num = str_split($string_num);

    return $array_num;
}
// $given_num = "abcdeghi";
// $given_num = "defgi dkl";
$given_num = 9832367621;
echo("<pre>");
print_r(find_missing_letter_in($given_num));
echo("<pre>");
?>
</body>
</html>

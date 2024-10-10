<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function kangaroo($x1, $v1, $x2, $v2) {
        // Write your code here
        $max = max($x1, $x2);
        for($i=0; $i<$max; $i++){
            $x1 += $v1;
            $x2 += $v2;
            if($x1 == $x2)
                return "Yes";
        }
        return "No";
    }

    echo ("<pre>");
    echo(kangaroo(14, 4, 98, 2));
    echo ("<pre>");
    echo(kangaroo(0, 2, 5, 3));
    echo ("<pre>");
    echo(kangaroo(0, 3, 4, 2));
    echo ("<pre>");
    echo(kangaroo(2, 1, 1, 2));
    echo ("<pre>");
    ?>
</body>
</html>
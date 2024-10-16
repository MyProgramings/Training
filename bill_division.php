<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function bill_division($bill, $k, $b) {
        $total = 0;
        for($i=0;$i<count($bill); $i++){
            if($i != $k){
                $total += $bill[$i];
            }
        }
        $Anna_amount = $total/2; 
        if($Anna_amount == $b)
            print("Bon Appetit");
        else
            print($b - $Anna_amount);
    }

    $bill = [3, 10, 2, 9];
    echo ("<pre>");
    bill_division($bill, 1, 12);
    echo ("<pre>");
    ?>
</body>
</html>
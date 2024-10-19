<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function get_common($nums1, $nums2) {
        // $min = 99999999999;
        for($i=0; $i<count($nums1); $i++){
            for($j=0;$j<count($nums2); $j++){
                print_r("some: (".$i.") (".$j.") = ".$nums2[$j]."<br>");
                if($nums1[$i] < $nums2[$j])
                    break;
                if($nums1[$i] == $nums2[$j]){
                    return $nums2[$j];
                }
            }
        }
        return -1;
    }

    $nums1 = [1, 8, 4, 2, 3, 7];
    $nums2 = [2, 3, 7];
    echo ("<pre>");
    print_r(get_common($nums1, $nums2));
    echo ("<pre>");
    ?>
</body>
</html>
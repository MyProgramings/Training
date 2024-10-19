<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function top_interview_array($review) {
        return $review;
    }

    $review = [1, 8, 4, 3, 2, 7];
    echo ("<pre>");
    print_r(top_interview_array($review));
    echo ("<pre>");
    ?>
</body>
</html>
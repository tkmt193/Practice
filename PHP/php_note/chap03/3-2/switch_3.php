<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $color = "red";

    switch ($color){
        case "green":
        case "red":
            $price = 120;
            break;
        case "blue":
            $price = 140;
            break;
        default:
            $price = 100;
            break;
    }
    echo "{$color}は{$price}円"
    ?>
</body>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $age = 18;
    if ($age<13) {
        $price = 0;
    } else if ($age<=15) {
        $price = 500;
    } else if ($age<=19) {
        $price = 1000;
    } else {
        $price = 2000;
    }
    echo "{$age}歳なので{$price}です。"

    ?>
</body>
</html>
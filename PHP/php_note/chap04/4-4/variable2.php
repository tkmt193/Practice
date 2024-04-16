<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $unitPrice = 230;
    $quantity = 5;
    $tanka = "unitPrice";
    $kosu = "quantity";
    $ryoukin = $$tanka * $$kosu;
    echo $ryoukin."円";

    ?>
</body>
</html>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $sugaku = 40;
    $eigo = 80;
    if (($sugaku>=60) && ($eigo>=60)) {
        echo "おめでとう！合格です！";
    } else {
        echo "残念！不合格です";
    }
    print($sugaku);
    print($eigo);

    ?>
</body>
</html>
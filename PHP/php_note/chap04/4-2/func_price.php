<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function price($tanka, $kosu) {
        $souryou = 250;
        $ryoukin = $tanka*$kosu;
        if ($ryoukin<5000){
            $ryoukin += $souryou;
        }
        return $ryoukin;
    }
    $kingaku1 = price(2400,2);
    $kingaku2 = price(1200,5);
    echo "金額１は{$kingaku1}円"."<br>".PHP_EOL;
    echo "金額２は{$kingaku2}円";
    ?>
</body>
</html>